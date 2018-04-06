@extends('layouts.assistantLayout')
@section('content')
    <section class="content-header">
        <h1>
            {{$schedule->patient->name}} 
        </h1>
        <ol class="breadcrumb">
            <li><a href="/assistant"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Schedule</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> Name </th>
                                        <td> {{$schedule->patient->name}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Date </th>
                                        <td> {{ $schedule->date }} </td>
                                    </tr>
                                    <tr>
                                        <th> Time From </th>
                                        <td> {{ $schedule->timeFrom }} </td>
                                    </tr>
                                    <tr>
                                        <th> Time To </th>
                                        <td> {{ $schedule->timeTo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Service </th>
                                        <td> {{ $schedule->service->servName }} </td>
                                    </tr>
                                    <tr>
                                        <th> Dentist </th>
                                        <td> {{ $schedule->dentist->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Operation Status </th>
                                        <td> {{ $schedule->opStatus }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('/assistant/schedules') }}" title="Back"><button class="btn btn-warning btn-sm pull-left"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <form method="POST" action="{{ url('assistant/schedules' . '/' . $schedule->schedId) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm pull-right" title="Delete Schedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection