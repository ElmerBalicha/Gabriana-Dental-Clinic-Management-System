@extends('layouts.assistantLayout')

@section('content')
    <section class="content-header">
        <h1>
            Edit Service Information
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/assistant') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="{{ url('/assistant/service') }}">Services</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Service</h3>
                        </div>
                        {!! Form::open(['action' => ['Assistant\\PatientsController@update', $service->servID], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {{Form::label('name', 'Name', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('name', $service->servName, ['class' => 'form-control', 'placeholder' => 'Enter service'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('price', 'Price', ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{Form::text('address', $service->price, ['class' => 'form-control', 'placeholder' => 'Enter new price'])}}
                                </div>
                            </div>
                            {{Form::hidden('_method', 'PUT')}}
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('/assistant/service')}}" class="btn btn-default">Cancel</a>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

