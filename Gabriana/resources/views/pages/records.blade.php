@extends('layouts.adminLayout')

@section('content')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Left side column. contains the logo and sidebar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Patient Records
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Records</li>
                </ol>
            </section>

      <!-- Patient Records Division -->
      <hr>
      <div class="well">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Contact No.</th>
                        <th>Dentist</th>
                        <th>Last Visit</th>
                        <th>Operation</th>
                        <th>Options</th>
                    </tr>
              </thead>
        
      </div> <!-- end of wrapper -->
      <!-- end of Patient Records Division -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

@endsection


