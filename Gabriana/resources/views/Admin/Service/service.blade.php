@extends('layouts.adminLayout')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Services
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Services</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
		<div class="col-xs-12">
			<div class="box">
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>Service Name</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
					@if(count($services) > 0)
					@foreach($services as $service)
					<tr>
						<td>{{$service->servName}}</td>
						<td>{{$service->price}}</td>
						<td>
						<center>
							<a href="{{ url('admin/service/' . $service->servID) }}" title="View Schedule"><button class="btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i>  View</button></a>
						</center>
						</td>
					</tr>
					@endforeach
					@else
					<p>No Service Found</p>
					@endif
				</tbody>
				<tfoot>
				<tr>
					<th>Service Name</th>
					<th>Price</th>
					<th>Actions</th>
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

