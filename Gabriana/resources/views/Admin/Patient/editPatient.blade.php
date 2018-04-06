@extends('layouts.adminLayout')

@section('content')
    <section class="content-header">
        <h1>
            Edit Patient Information
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="{{ url('/admin/patient') }}">Patient</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Patient</h3>
                        </div>
                        {!! Form::open(['action' => ['Admin\\PatientsController@update', $patient->patID], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {{Form::label('name', 'Name', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('name', $patient->name, ['class' => 'form-control', 'placeholder' => 'First name followed by Last Name'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('address', 'Address', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('address', $patient->address, ['class' => 'form-control', 'placeholder' => '#68 Corner General Luna road'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('occupation', 'Occupation', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('occupation', $patient->occupation, ['class' => 'form-control', 'placeholder' => 'Dentist'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('patientTelNo', 'Telephone number', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('patientTelNo', $patient->patientTelNo, ['class' => 'form-control', 'placeholder' => '09036232265'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('status', 'Civil Status', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('status', $patient->status, ['class' => 'form-control', 'placeholder' => 'Married or Single'])}}
                                    </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('birthDate', 'Date of Birth', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('birthDate', $patient->birthDate, ['class' => 'form-control', 'placeholder' => 'Year-month-day Ex. 1997-3-28'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('age', 'Age', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('age', $patient->age, ['class' => 'form-control', 'placeholder' => '18'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('sex', 'Sex', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('sex', $patient->sex, ['class' => 'form-control', 'placeholder' => 'Male or Female'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('medconditions', 'Medical Conditions', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('medconditions', $patient->medconditions, ['class' => 'form-control', 'placeholder' => 'Pulmonary Hypertension, etc.'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('allergies', 'Allergies', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('allergies', $patient->allergies, ['class' => 'form-control', 'placeholder' => 'Peanut, Dust, etc.'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('balance', 'Balance', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('balance', $patient->balance, ['class' => 'form-control', 'placeholder' => '0'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('patStatus', 'Patient Status', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('patStatus', $patient->patStatus, ['class' => 'form-control', 'placeholder' => 'Active'])}}
                                </div>
                            </div>
                            {{Form::hidden('_method', 'PUT')}}
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('/admin/patient')}}" class="btn btn-default">Cancel</a>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

