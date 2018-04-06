@extends('layouts.assistantLayout')

@section('content')

        <section class="content-header">
            <h1>
                New Inventory Item
            </h1>
            <ol class="breadcrumb">
                <li><a href="/assistant"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="">Inventory</li>
                <li class="active">Create new Inventory</li>
            </ol>
        </section>

        <div class="well">
            {!! Form::open(['action' => 'Assistant\\InventoryController@store', 'method' => 'POST']) !!}
            
            <div class="form-group">
                {{Form::label('invName', 'Name')}}
                {{Form::text('invName', '', ['class' => 'form-control', 'placeholder' => 'Inventory Name'])}}
            </div>

            <div class="form-group">
                    {{Form::label('quantity', 'Quantity')}}
                    {{Form::text('quantity', '', ['class' => 'form-control', 'placeholder' => 'Initial Quantity'])}}
            </div>

            <div class="form-group">
                    {{Form::label('low_stock_quantity', 'Low Stock Quantity')}}
                    {{Form::text('low_stock_quantity', '', ['class' => 'form-control', 'placeholder' => 'Enter the Low Stock Quantity'])}}
            </div>

            <div class="form-group">
                    {{Form::label('unit', 'Unit Category')}}
                    {{Form::text('unit', '', ['class' => 'form-control', 'placeholder' => 'Enter the Unit category (e.g. Box, Pieces)'])}}
            </div>
           <center> {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}} </center>
            {!! Form::close() !!}
        </div>
      
@endsection