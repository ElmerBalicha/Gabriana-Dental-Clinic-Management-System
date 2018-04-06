@extends('layouts.adminLayout')
@section('content')
    <section class="content-header">
    <h1>
        {{$patient->name}}
    </h1>
    <ol class="breadcrumb">
        <li><a href={{ url('/admin') }}><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/admin/patient') }}">Records</a></li>
    </ol>
    </section>
    <!-- Main content -->
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
                                        <td> {{$patient->name}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Address </th>
                                        <td> {{$patient->address}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Occupation </th>
                                        <td> {{$patient->occupation}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Contact Number </th>
                                        <td> {{$patient->patientTelNo}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Civil Status</th>
                                        <td> {{$patient->status}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Date of Birth </th>
                                        <td> {{$patient->birthDate}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Age </th>
                                        <td> {{$patient->age}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Gender </th>
                                        <td> {{$patient->sex}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Medical Conditions </th>
                                        <td> {{$patient->medconditions}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Allergies </th>
                                        <td> {{$patient->allergies}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Balance </th>
                                        <td> {{$patient->balance}}  </td>
                                    </tr>
                                    <tr>
                                        <th> Patient Status </th>
                                        <td> {{$patient->patStatus}}  </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="myModalLabel">{{$patient->name}}</h1>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        @foreach($schedules as $schedule)
                                            <h3>{{$schedule->date}}</h3>
                                            <hr>
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 50%">Date</th>
                                                        <td>{{$schedule->date}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Time From</th>
                                                        <td>{{$schedule->timeFrom}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Time To</th>
                                                        <td>{{$schedule->timeTo}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Operation Status</th>
                                                        <td>{{$schedule->opStatus}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Dentist</th>
                                                        <td>{{$schedule->dentist->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Services</th>
                                                        <td>{{$schedule->service->servName}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Balance</th>
                                                        <td>{{$patient->balance}}</td>
                                                        <th></th>
                                                        <td><button class="btn btn-success">Pay</button></td>
                                                    </tr>    
                                                </tbody>
                                            </table>
                                        @endforeach
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('/admin/patient') }}" class="btn btn-warning">Cancel</a>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalCart">History</button>
                            <a href="{{ url('/admin/patient' . '/' .$patient->patID . '/edit') }}" class="btn btn-primary pull-right">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


