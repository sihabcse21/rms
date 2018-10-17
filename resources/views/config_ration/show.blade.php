@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Ration Profile</h2>
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
                    Ration Profile
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Ration ID</label>
                                            <input class="form-control" id="ration_id" type="text" value="{{ $data->users->ration_id }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ration_months">Ration Months</label>
                                            <input class="form-control" id="ration_months" name="ration_months" type="text" value="{{ $data->ration_months->name }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" id="name" name="name" type="text" value="{{ $data->users->name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dname">Designation</label>
                                            <input class="form-control" id="dname" name="dname" type="text" value="{{ $data->users->designation_name }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nid">NID</label>
                                            <input class="form-control" id="nid" name="nid" type="text" value="{{ $data->users->nid }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="police_id_no">Police ID Number</label>
                                            <input class="form-control" id="police_id_no" name="police_id_no" type="text" value="{{ $data->users->police_id_no }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date_of_joining">Joining Date</label>
                                            <input class="form-control" id="date_of_joining" name="date_of_joining" type="text" value="{{ $data->users->date_of_joining }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="date_of_leave">Leaving Date</label>
                                            <input class="form-control" id="date_of_leave" name="date_of_leave" type="text" value="{{ $data->users->date_of_leave }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_no">Mobile Number</label>
                                            <input class="form-control" id="mobile_no" name="mobile_no" type="text" value="{{ $data->users->mobile_no }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="family_member">Family Member</label>
                                            <input class="form-control" id="family_member" name="family_member" type="text" value="{{ $data->users->family_member }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <b>Ration Product Details</b>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <table width="100%" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data->ration_details as $key=>$ration)
                                                            <tr class="odd gradeX">
                                                                <td>{{ $ration->skus->name }}</td>
                                                                <td>{{ $ration->skus->weight }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Total Price</th>
                                                            <th>{{ $data->payment_amount }} taka only</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Payment Status</th>
                                                            <th>
                                                                @if($data->is_paid == 1)
                                                                    {{ "Paid" }}
                                                                @else
                                                                    {{ "Not Paid" }}
                                                                @endif
                                                            </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a class="btn btn-danger" style="margin-top: 23px" href="/config_ration">Back</a>
                                    </div>
                                </div>
                            </form>
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

@endsection
