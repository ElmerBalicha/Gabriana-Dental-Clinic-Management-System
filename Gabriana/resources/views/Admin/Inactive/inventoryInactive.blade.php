@extends('layouts.adminLayout')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inventory
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Records</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Unit</th>
                                        <th>Inventory Status</th>
                                        <th>Status</th>
                                        <th style ="width: 25%">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($inventory) > 0)
                                        @foreach($inventory as $item)
                                            <tr>
                                                <td>{{$item->invName}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td>{{$item->unit}}</td>
                                                <td>{{$item->invStatus}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>
                                                    <a href="{{ url('/admin/inventory' . '/' . $item->invID) }}" class="btn btn-primary"><i class="fa fa-folder"></i> Profile</a>
                                                    <a class="btn btn-info"><i class="fa fa-pencil"></i> History</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No Inventory Found</p>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    <!-- /.content -->


  @endsection

