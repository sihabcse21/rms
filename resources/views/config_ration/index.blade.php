@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Ration Coupon</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ration Coupon
                    <div class="ibox-tools" style="float: right; ">
                        <a class="btn btn-primary btn-rounded btn-sm" href="{{route('config_ration.create')}}"><i
                                    class="fa fa-plus-circle"></i>
                            <b>Create</b></a>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Ration ID</th>
                            <th>Police ID Number</th>
                            <th>Creation Date</th>
                            <th>Ration Month</th>
                            <th>Payment Amount</th>
                            <th>Payment Status</th>
                            <th>Coupon Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['ration_configs'] as $key=>$config)
                        <tr class="odd gradeX">
                            <td>{{ $config->users->name }}</td>
                            <td>{{ $config->users->designation_name }}</td>
                            <td class="center">{{ $config->users->ration_id }}</td>
                            <td class="center">{{ $config->users->police_id_no }}</td>
                            <td>{{ $config->created_at }}</td>
                            <td>{{ $config->ration_months->name }}</td>
                            <td class="center">{{ $config->payment_amount }}</td>
                            <td>
                                @if($config->is_paid == 1)
                                    {{ "Paid" }}
                                @else
                                    {{ "Not Paid" }}
                                @endif
                            </td>
                            <td>
                                @if($config->is_paid == 1)
                                    {{ "Ration Delivered" }}
                                @else
                                    {{ "Coupon Receive" }}
                                @endif
                            </td>
                            <td>
                                <div class="outer">
                                    <div class="inner">
                                        <a class="btn btn-info btn-xs" type="button"
                                           href="{{ route('config_ration.show', $config->id) }}"> <i
                                                    class="fa fa-eye"></i> View</a>
                                    </div>
                                    <div class="inner">
                                        <a class="btn btn-warning btn-xs" type="button"
                                           href="#"><i
                                                    class="fa fa-pencil-square-o"></i> Edit</a>
                                    </div>
                                    <div class="inner">
                                        <a class="btn btn-primary btn-xs" type="button" target="_blank"
                                           href="{{ route('config_ration.edit', $config->id) }}"> <i
                                                    class="fa fa-print"></i> Print</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

@endsection
