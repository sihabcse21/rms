@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Rank Wise Delivery Report</h2>
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
                    Rank Wise Delivery
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Rank Name</th>
                            <th>Total Ration Delivered</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>IG</td>
                            <td>200</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>DIG</td>
                            <td>170</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>ADIG</td>
                            <td>160</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>SP</td>
                            <td>300</td>
                        </tr>
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
