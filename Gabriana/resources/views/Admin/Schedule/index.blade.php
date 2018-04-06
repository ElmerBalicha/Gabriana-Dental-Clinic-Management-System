@extends('layouts.adminLayout')

@section('content')
    <section class="content-header">
            <h1>
                Schedule
            </h1>
            <hr>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Schedule</li>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">

                <div class="card-body">
                    <a href="{{ url('/admin/schedules/create') }}" class="btn btn-success btn-sm" title="Add New Schedule">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <form method="GET" action="{{ url('/admin/schedules') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group pull-right">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                        </div>
                        <span class="input-group-append pull-right">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </form>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th><th>Date</th><th>TimeFrom</th><th>TimeTo</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $item)
                                <tr>
                                    <td>{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->date }}</td><td>{{ $item->timeFrom }}</td><td>{{ $item->timeTo }}</td>
                                    <td>
                                        <a href="{{ url('/admin/schedules/' . $item->id) }}" title="View Schedule"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/admin/schedules/' . $item->id . '/edit') }}" title="Edit Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/admin/schedules' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $schedules->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
