@extends('layouts.assistantLayout')

@section('content')

        <section class="content-header">
            <h1>
                Create Service
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/assistant') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class=""><a href="{{ url('/assistant/service') }}">Services</a></li>
                <li class="active">Create</li>
            </ol>
        </section>
        <div class="well">
        {!! Form::open(['action' => 'Assistant\\ServicesController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('servName', 'Service Name')}}
                {{Form::text('servName', '', ['class' => 'form-control', 'placeholder' => 'Enter Service'])}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Enter Price'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary']) }}
        {!! Form::close() !!}
        </div>

@endsection