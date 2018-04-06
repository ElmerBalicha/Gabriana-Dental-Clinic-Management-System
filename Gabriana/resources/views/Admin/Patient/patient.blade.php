@extends('layouts.adminLayout')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Patient Records
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Records</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact No.</th>
                                        <th>Age</th>
                                        <th>Sex</th>
                                        <th>Patient Status</th>
                                        <th style ="width: 25%">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($patients) > 0)
                                    <?php $counter = 0 ?>
                                        @foreach($patients as $patient)
                                        <?php $counter++ ?>
                                            <tr>
                                                <td>{{$patient->name}}</td>
                                                <td>{{$patient->address}}</td>
                                                <td>{{$patient->patientTelNo}}</td>
                                                <td>{{$patient->age}}</td>
                                                <td>{{$patient->sex}}</td>
                                                <td>{{$patient->patStatus}}</td>
                                                <td>
                                                    <div class="modal fade" id="modalCart{{$counter}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    @php $limiter = 0 @endphp
                                                                    @php $pId = $patient->patID @endphp
                                                                    @foreach($schedules as $schedule)
                                                                        @if($schedule->patID == $pId)
                                                                            @php $limiter++ @endphp
                                                                            @if($limiter < 5)
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
                                                                            @else
                                                                                @php $limiter = 0 @endphp
                                                                            @endif
                                                                        @endif
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
                                                    <button class="btn btn-info pull-right" style="margin: 2px" data-toggle="modal" data-target="#modalCart{{$counter}}" ><i class="fa fa-pencil" ></i>History</button>
                                                    <a href="{{ url('/assistant/patient' . '/' . $patient->patID) }}" class="btn btn-primary pull-right" style="margin: 2px"><i class="fa fa-folder"></i> Profile</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No patients found</p>
                                    @endif
                                </tbody>
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

