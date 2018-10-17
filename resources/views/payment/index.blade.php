@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Payments</h2>
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
                    Payments
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
                            <th>Ration Month</th>
                            <th>Payment Amount</th>
                            <th>Payment Status</th>
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
                                <div class="outer">
                                    <div class="inner">
                                        <a class="btn btn-info btn-xs" type="button"
                                           href="{{ route('config_ration.show', $config->id) }}"> <i
                                                    class="fa fa-eye"></i> View</a>
                                    </div>
                                    @if($config->is_paid != 1)
                                    <div class="inner">
                                        <a class="btn btn-warning btn-xs" type="button"
                                           onclick="updatePayment({{ $config->id }})"><i
                                                    class="fa fa-pencil-square-o"></i> Click for Paid</a>
                                    </div>
                                    @endif
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

<script>

    function updatePayment(config_id) {
        var config_id = config_id;
        //alert(config_id);
        $.ajax({
            type    : "GET",
            url     : "/updatePayment",
            data    : {config_id:config_id},
            datatype: "html",
            success : function (response) {
                if(response == 1){
                    location.reload();
                }else{
                    alert("Error Occurred");
                }
            },
            error   : function () {
                alert("Error Occurred");
            }
        });
    }

</script>

@endsection
