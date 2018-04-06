@extends('layouts.adminLayout')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Patient Records
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
                                        <th>Address</th>
                                        <th>Contact No.</th>
                                        <th>Age</th>
                                        <th>Sex</th>
                                        <th>Patient Status</th>
                                        <th style ="width: 25%">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($patients) > 0)
                                        @foreach($patients as $patient)
                                            <tr>
                                                <td>{{$patient->name}}</td>
                                                <td>{{$patient->address}}</td>
                                                <td>{{$patient->patientTelNo}}</td>
                                                <td>{{$patient->age}}</td>
                                                <td>{{$patient->sex}}</td>
                                                <td>{{$patient->patStatus}}</td>
                                                <td>
                                                    <center>
                                                    {!! Form::open(['action' => ['Admin\InactivePatientsController@destroy', $patient->patID], 'method' => 'POST', 'class' => 'pull-left' ]) !!}
                                                        {{Form::hidden('_method', 'DELETE')}}
                                                        {{Form::button('<i class="fa fa-check"></i> Activate', ['class' => 'btn btn-success', 'type' => 'submit'])}}
                                                    {!! Form::close() !!}
                                                    </center>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No Patients Found</p>
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

