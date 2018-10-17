@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Ration Configuration > Create</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ration Configuration Create
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ration ID</label>
                                        <input class="form-control" id="ration_id" type="text" placeholder="Type Ration ID" autofocus onchange="fillUserDetails()">
                                        {{--<input type="text" name="documentID" onmouseover="this.focus();">--}}
                                    </div>
                                </div>
                                {{--<div class="col-sm-6">
                                    <a class="btn btn-primary" style="margin-top: 23px" onclick="fillUserDetails()">Search</a>
                                </div>--}}
                            </div>
                            {{--<form role="form">--}}
                                {!! Form::open(['action' => 'RationConfigurationsController@store', 'method'=>'POST', 'role' => 'form']) !!}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" readonly>
                                            <input class="form-control" id="user_id" name="user_id" type="hidden">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dname">Designation</label>
                                            <input class="form-control" id="dname" name="dname" type="text" placeholder="Designation" readonly>
                                            <input class="form-control" id="designation_id" name="designation_id" type="hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nid">NID</label>
                                            <input class="form-control" id="nid" name="nid" type="text" placeholder="NID" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="police_id_no">Police ID Number</label>
                                            <input class="form-control" id="police_id_no" name="police_id_no" type="text" placeholder="Police ID Number" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date_of_joining">Joining Date</label>
                                            <input class="form-control" id="date_of_joining" name="date_of_joining" type="text" placeholder="Joining Date" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date_of_leave">Leaving Date</label>
                                            <input class="form-control" id="date_of_leave" name="date_of_leave" type="text" placeholder="Leaving Date" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_no">Mobile Number</label>
                                            <input class="form-control" id="mobile_no" name="mobile_no" type="text" placeholder="Mobile Number" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="family_member">Family Member</label>
                                            <input class="form-control" id="family_member" name="family_member" type="text" placeholder="Family Member" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ration_months">Ration Months</label>
                                            @foreach($data['ration_months'] as $key=>$month)
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="ration_months{{ $month['id'] }}" name="ration_months[]" value="{{ $month['id'] }}">{{ $month['name'] }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a class="btn btn-danger" style="margin-top: 23px" href="/config_ration">Back</a>
                                        <button type="submit" style="margin-top: 23px" class="btn btn-success">Confirm</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
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

    function fillUserDetails() {
        var ration_id = $("#ration_id").val();
        //alert(ration_id);
        $.ajax({
            type    : "GET",
            url     : "/getUserDetails",
            data    : {ration_id:ration_id},
            datatype: "html",
            success : function (response) {
                //console.log(response);
                $('#user_id').val(response.user_id);
                $('#name').val(response.name);
                $('#designation_id').val(response.designation_id);
                $('#dname').val(response.designation_name);
                $('#nid').val(response.nid);
                $('#police_id_no').val(response.police_id_no);
                $('#date_of_joining').val(response.date_of_joining);
                $('#date_of_leave').val(response.date_of_leave);
                $('#mobile_no').val(response.mobile_no);
                $('#family_member').val(response.family_member);
            },
            error   : function () {
                alert("Error Occurred");
            }
        });
    }


</script>

@endsection
