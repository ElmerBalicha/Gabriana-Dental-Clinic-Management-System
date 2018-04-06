@extends('layouts.assistantLayout')
@section('content')
<section class="content-header">
   <h1>
      {{$patient->name}}
   </h1>
   <ol class="breadcrumb">
      <li><a href={{ url('/assistant') }}><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ url('/assistant/patient') }}">Records</a></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-md-12">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Patient Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table class="table table-bordered">
                  <tbody>
                     <tr>
                        <th>Name</th>
                        <td>{{$patient->name}}</td>
                     </tr>
                     <tr>
                        <th>Address</th>
                        <td>{{$patient->address}}</td>
                     </tr>
                     <tr>
                        <th>Occupation</th>
                        <td>{{$patient->occupation}}</td>
                     </tr>
                     <tr>
                        <th>Contact Number</th>
                        <td>{{$patient->patientTelNo}}</td>
                     </tr>
                     <tr>
                        <th>Civil Status</th>
                        <td>{{$patient->status}}</td>
                     </tr>
                     <tr>
                        <th>Date of Birth</th>
                        <td>{{$patient->birthDate}}</td>
                     </tr>
                     <tr>
                        <th>Age</th>
                        <td>{{$patient->age}}</td>
                     </tr>
                     <tr>
                        <th>Gender</th>
                        <td>{{$patient->sex}}</td>
                     </tr>
                     <tr>
                        <th>Medical Conditions</th>
                        <td>{{$patient->medconditions}}</td>
                     </tr>
                     <tr>
                        <th>Allergies</th>
                        <td>{{$patient->allergies}}</td>
                     </tr>
                     <tr>
                        <th>Balance</th>
                        <td>{{$patient->balance}}</td>
                     </tr>
                     </tr>
                     <tr>
                        <th>Patient Status</th>
                        <td>{{$patient->patStatus}}</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
               <a href="{{ url('/assistant/patient') }}" class="btn btn-warning">Cancel</a>
               <a href="{{ url('/assistant/patient' . '/' .$patient->patID . '/edit') }}" class="btn btn-primary pull-right">Edit</a>
            </div>
         </div>
         <!-- /.box -->
      </div>
   </div>
</section>
@endsection


