@extends('layouts.adminLayout')

@section('content')
<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Inventory
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Inventory</li>
		</ol>
	</section>


	<!-- Main content -->
	<section class="content">
		<div class="row">
		<div class="col-xs-12">
			<div class="box">
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped table-responsive">
				<thead>
				<tr>
					<th>Name</th>
					<th>Quantity</th>
					<th>Unit</th>
					<th>Inventory Status</th>
					<th>Status</th>
					<th>Options</th>
				</tr>
				</thead>
				<tbody>
					@if(count($inventory) > 1)
					@foreach($inventory as $item)
					<tr>
						<td>{{$item->invName}}</td>
						<td>{{$item->quantity}}</td>
						<td>{{$item->unit}}</td>
						<td>{{$item->invStatus}}</td>
						<td>{{$item->status}}</td>
						<td>
						<center>
							<a href="{{ url('admin/inventory/' . $item->invID) }}" title="View Schedule"><button class="btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i>  View</button></a>
							{!! Form::open(['action' => ['Assistant\InventoryController@destroy', $item->invID], 'method' => 'POST']) !!}
								{{Form::hidden('_method', 'DELETE')}}
								<button class="btn btn-danger pull-right" type="submit" style="margin: 2px"><i class="fa fa-trash"></i> Deactivate</button>
							{!! Form::close() !!}	
						</center>					
						</td>
					</tr>
					@endforeach
					@else
					<p>No Inventory Found</p>
					@endif
				</tbody>
				<tfoot>
				<tr>
					<th>Name</th>
					<th>Quantity</th>
					<th>Unit</th>
					<th>Inventory Status</th>
					<th>Status</th>
					<th>Options</th>
				</tr>
				</tfoot>
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

