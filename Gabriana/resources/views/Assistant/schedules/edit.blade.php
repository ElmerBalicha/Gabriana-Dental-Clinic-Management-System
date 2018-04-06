@extends('layouts.assistantLayout')

@section('content')
    <section class="content-header">
        <h1>
            Edit Schedule {{ $schedule->schedId }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="/assistant"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Schedule</li>
        </ol>
        <h4>{{$schedule->patient->name}}</h4>
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

                        {!! Form::open(['action' => ['Assistant\\SchedulesController@update',  $schedule->schedId] ,'method' => 'POST']) !!}
                            {{ csrf_field() }}
                            <div class="form-group" {{ $errors->has('patID') ? 'has-error' : ''}}>
                            <input type="hidden" name="patID" value="{{$schedule->patient->patID}}">
                            </div> 
                            <div class="form-group" {{ $errors->has('date') ? 'has-error' : ''}}>
                                {{Form::label('date', 'Date')}}
                                {{Form::date('date', $schedule->date, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group" {{ $errors->has('timeFrom') ? 'has-error' : ''}}>
                                {{Form::label('timeFrom', 'Time From')}}
                                {{Form::time('timeFrom', $schedule->timeFrom, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group" {{ $errors->has('timeTo') ? 'has-error' : ''}}>
                                {{Form::label('timeTo', 'Time To')}}
                                {{Form::time('timeTo', $schedule->timeTo, ['class' => 'form-control', 'placeholder' => 'First name followed by Last Name'])}}
                            </div>
                            <div class="form-group" {{ $errors->has('opStatus') ? 'has-error' : ''}}>
                                {{Form::label('opStatus', 'Operation Status')}}
                                {{Form::text('opStatus', $schedule->opStatus, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group" {{ $errors->has('servID') ? 'has-error' : ''}}>
                                {{Form::label('servID', 'Service')}}
                                <select name="servID" class="form-control">
                                    <option value="{{$schedule->service->servID}}">{{$schedule->service->servName}}</option>
                                    @foreach($services as $service)
                                        <option value="{{$service->servID}}">{{$service->servName}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group" {{ $errors->has('dentID') ? 'has-error' : ''}}> 
                                {{Form::label('dentID', 'Dentist')}}                              
                                 <select name="dentID" class="form-control">
                                    <option value="{{$schedule->dentist->dentID}}">{{$schedule->dentist->name}}</option> 
                                    @foreach($dentists as $dentist)
                                        <option value="{{$dentist->dentID}}">{{$dentist->name}}</option>
                                    @endforeach
                                </select> 
                            </div>
                            {{Form::hidden('_method', 'PATCH')}}                     
                    </div>
                    <div class="box-footer">
                        <a href="{{ url('/assistant/schedules') }}" title="Back"><button class="btn btn-warning"> Cancel</button></a>
                        {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right']) }}
                    </div>
                    {!! Form::close() !!}   
                </div>
            </div>
        </div>
    </div>
@endsection
