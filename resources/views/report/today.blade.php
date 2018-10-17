@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Today's Delivery Report</h2>
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
                    Today's Delivery
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Previous Stock</th>
                            <th>Today's Delivered</th>
                            <th>Current Stock</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>Rice</td>
                                <td>200 kg</td>
                                <td>50 kg</td>
                                <td>150 kg</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>Oil</td>
                                <td>100 litre</td>
                                <td>20 litre</td>
                                <td>80 litre</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>Moida</td>
                                <td>200 kg</td>
                                <td>50 kg</td>
                                <td>150 kg</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>Sugar</td>
                                <td>150 kg</td>
                                <td>30 kg</td>
                                <td>120 kg</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>Salt</td>
                                <td>80 kg</td>
                                <td>10 kg</td>
                                <td>70 kg</td>
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
