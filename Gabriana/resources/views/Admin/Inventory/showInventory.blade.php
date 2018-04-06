@extends('layouts.adminLayout')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$inventory->invName}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/admin/inventory') }}">Inventory</a></li>
        <li>Inventory Information</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Inventory Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Name :</td>
                            <td>{{$inventory->invName}}</td>
                        </tr>
                          <tr>
                            <td>Quantity :</td>
                            <td>{{$inventory->quantity}}</td>
                          </tr>
                          <tr>
                            <td>Low Stock Quantity :</td>
                            <td>{{$inventory->low_stock_quantity}}</td>
                          </tr>
                          <tr>
                              <td>Unit :</td>
                            <td>{{$inventory->unit}}</td>
                          </tr>
                          <tr>
                            <td>Inventory Status</td>
                            <td>{{$inventory->invStatus}}</td>
                          </tr>
                          <tr>
                            <td>Status :</td>
                            <td>{{$inventory->status}}</td>
                          </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ url('/admin/inventory') }}" class="btn btn-default">Back</a>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->



@endsection


