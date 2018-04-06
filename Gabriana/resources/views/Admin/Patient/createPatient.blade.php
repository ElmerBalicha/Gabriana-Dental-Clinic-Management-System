@extends('layouts.adminLayout')

@section('content')

        <section class="content-header">
            <h1>
                Create Patient
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class=""><a href="{{ url('/admin/patient') }}">Records</a></li>
                <li class="active">Create</li>
            </ol>
        </section>
        <div class="well">
        {!! Form::open(['action' => 'Admin\\PatientsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'First name followed by Last Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => '#68 Corner General Luna road'])}}
            </div>
            <div class="form-group">
                {{Form::label('occupation', 'Occupation')}}
                {{Form::text('occupation', '', ['class' => 'form-control', 'placeholder' => 'Enter Occupation'])}}
            </div>
            <div class="form-group">
                {{Form::label('patientTelNo', 'Telephone number')}}
                {{Form::text('patientTelNo', '', ['class' => 'form-control', 'placeholder' => '09036232265'])}}
            </div>
            <div class="form-group">
                {{Form::label('status', 'Civil Status')}}
                {{Form::text('status', '', ['class' => 'form-control', 'placeholder' => 'Enter Civil Status'])}}
            </div>
            <div class="form-group">
                {{Form::label('birthdate', 'Date of Birth')}}
                {{Form::text('birthdate', '', ['class' => 'form-control', 'placeholder' => 'Year-month-day Ex. 1997-3-28'])}}
            </div>
            <div class="form-group">
                {{Form::label('age', 'Age')}}
                {{Form::text('age', '', ['class' => 'form-control', 'placeholder' => '18'])}}
            </div>
            <div class="form-group">
                {{Form::label('sex', 'Sex')}}
                {{Form::text('sex', '', ['class' => 'form-control', 'placeholder' => 'Male or Female'])}}
            </div>
            <div class="form-group">
                {{Form::label('medConditions', 'Medical Conditions')}}
                {{Form::text('medConditions', '', ['class' => 'form-control', 'placeholder' => 'Pulmonary Hypertension, etc.'])}}
            </div>
            <div class="form-group">
                {{Form::label('allergies', 'Allergies')}}
                {{Form::text('allergies', '', ['class' => 'form-control', 'placeholder' => 'Peanut, Dust, etc.'])}}
            </div>
            <div class="form-group">
                {{Form::label('balance', 'Balance')}}
                {{Form::text('balance', '', ['class' => 'form-control', 'placeholder' => '0'])}}
            </div>
            <div class="form-group">
                {{Form::label('patStatus', 'Patient Status')}}
                {{Form::text('patStatus', '', ['class' => 'form-control', 'placeholder' => 'Active'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary']) }}
        {!! Form::close() !!}
        </div>

@endsection