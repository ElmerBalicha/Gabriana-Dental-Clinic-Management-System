@extends('layouts.adminLayout')

@section('content')
    <section class="content-header">
        <h1>
            Create Schedule
        </h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Schedule</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif                        
                        {!! Form::open(['action' => 'Admin\\SchedulesController@store', 'method' => 'POST']) !!}
                            {{ csrf_field() }}
                            <div class="form-group" {{ $errors->has('patID') ? 'has-error' : ''}}>
                                {{Form::label('patID', 'Patient Name')}}
                                <select name="patID" class="form-control">
                                    @foreach($patients as $patient)
                                        <option value="{{$patient->patID}}">{{$patient->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" {{ $errors->has('date') ? 'has-error' : ''}}>
                                {{Form::label('date', 'Date')}}
                                {{Form::date('date', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group" {{ $errors->has('timeFrom') ? 'has-error' : ''}}>
                                {{Form::label('timeFrom', 'Time From')}}
                                {{Form::time('timeFrom', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group" {{ $errors->has('timeTo') ? 'has-error' : ''}}>
                                {{Form::label('timeTo', 'Time To')}}
                                {{Form::time('timeTo', '', ['class' => 'form-control', 'placeholder' => 'First name followed by Last Name'])}}
                            </div>
                            <div class="form-group" {{ $errors->has('servID') ? 'has-error' : ''}}>
                                {{Form::label('servID', 'Service')}}
                                <select name="servID" class="form-control">
                                        @foreach($services as $service)
                                            <option value="{{$service}}">{{$service->servName}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group" {{ $errors->has('dentID') ? 'has-error' : ''}}> 
                                {{Form::label('dentID', 'Dentist')}}                              
                                <select name="dentID" class="form-control">
                                    @foreach($dentists as $dentist)
                                        <option value="{{$dentist}}">{{$dentist->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right']) }}
                        {!! Form::close() !!}
                        <a href="{{ url('/admin/schedules') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
