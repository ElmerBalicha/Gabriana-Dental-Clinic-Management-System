@extends('layouts.adminLayout')

@section('content')

        <section class="content-header">
            <h1>
                Add inventory item
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class=""><a href="{{ url('/admin/inventory') }}">Inventory</a></li>
                <li class="active">Add Inventory</li>
            </ol>
        </section>

        <div class="well">
            {!! Form::open(['action' => ['Admin\\InventoryController@update', $inventory->invID], 'method' => 'POST']) !!}
            
            <div class="form-group">
                {{Form::label('invName', 'Name')}}
                {{Form::text('invName', $inventory->invName, ['class' => 'form-control', 'placeholder' => 'Inventory Name'])}}
            </div>

            <div class="form-group">
                    {{Form::label('quantity', 'Quantity')}}
                    {{Form::text('quantity', $inventory->quantity, ['class' => 'form-control', 'placeholder' => 'Initial Quantity'])}}
            </div>
            <div class="form-group">
                    {{Form::label('unit', 'Unit Category')}}
                    {{Form::text('unit', $inventory->unit, ['class' => 'form-control', 'placeholder' => 'Enter the Unit category (e.g. Box, Pieces)'])}}
            </div>
                        
            {{Form::hidden('_method', 'PUT')}}
            <div class="box-footer">
                <a href="{{ url('/admin/inventory') }}" class="btn btn-default">Cancel</a>
                {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right']) }}
            </div>
            {!! Form::close() !!}
        </div>
@endsection