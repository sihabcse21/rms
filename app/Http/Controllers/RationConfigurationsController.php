<?php

namespace App\Http\Controllers;

use App\RationConfigDetail;
use App\RationConfiguration;
use App\RationMonth;
use App\Sku;
use App\User;
use Illuminate\Http\Request;

class RationConfigurationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ration_configs'] = RationConfiguration::all();

        return view('config_ration/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['ration_months'] = RationMonth::all()->toArray();

        return view('config_ration/add')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d_id = $request->input('designation_id');
        $month = $request->input('ration_months');
        $payment = 0;
        if($d_id == 1){
            $payment = 250;
        }else if($d_id == 2){
            $payment = 300;
        }else if($d_id == 3){
            $payment = 200;
        }else if($d_id == 4){
            $payment = 150;
        }

        $config                     = new RationConfiguration();

        $config->user_id            = $request->input('user_id');
        $config->designation_id     = $d_id;
        $config->ration_month_id    = $month[0];
        $config->payment_amount     = $payment;
        $config->is_paid            = 0;
        $config->status             = 'Active';
        $config->save();

        $insert_id = $config->id;

        $skus = Sku::all()->toArray();

        foreach ($skus as $key=>$sku){
            RationConfigDetail::create(array(
                'config_id'          => $insert_id,
                'sku_id'             => $sku['id']
            ));
        }

        return redirect('config_ration');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('config_ration.show')->with('data', RationConfiguration::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RationConfiguration::find($id);

        return view('config_ration.memo_print')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getUserDetails(Request $request){
        $ration_id   = $request->input("ration_id");
        $user_info   = User::where('ration_id', "$ration_id")->first();
        $data = array(
            'user_id'           => $user_info->id,
            'name'              => $user_info->name,
            'designation_id'    => $user_info->designation_id,
            'designation_name'  => $user_info->designation_name,
            'nid'               => $user_info->nid,
            'police_id_no'      => $user_info->police_id_no,
            'date_of_joining'   => $user_info->date_of_joining,
            'date_of_leave'     => $user_info->date_of_leave,
            'mobile_no'         => $user_info->mobile_no,
            'family_member'     => $user_info->family_member,
        );
        //echo json_encode($data);
        return $data;
    }

    public function generateBarCode(){
        return view('barcode_print');
    }

    public function payment(){
        $data['ration_configs'] = RationConfiguration::all();

        return view('payment/index')->with('data', $data);
    }

    public function updatePayment(Request $request){
        $config_id   = $request->input("config_id");
        $config      = RationConfiguration::findOrFail($config_id);
        if($config){
            $config->is_paid   = 1;
            $config->save();
            return 1;
        }else{
            return 2;
        }
    }

    public function todaysDelivery(){
        return view('report.today');
    }

    public function rankWiseDelivery(){
        return view('report.delivery');
    }
}
