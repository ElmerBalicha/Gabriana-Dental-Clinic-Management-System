@extends('layouts.adminLayout')

@section('content')
    <section class="content-header">
        <h1>
            Edit Schedule {{ $schedule->id }}
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
                 
                        <form method="POST" action="{{ url('/admin/schedules/' . $schedule->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.schedules.form', ['submitButtonText' => 'Update'])
                            
                        </form>
                        <a href="{{ url('/admin/schedules') }}" title="Back"><button class="btn btn-warning btn-sm"><i aria-hidden="true"></i>Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
