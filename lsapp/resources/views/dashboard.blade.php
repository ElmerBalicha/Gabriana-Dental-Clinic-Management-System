@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your Blog Posts</h3>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class = "btn btn-default">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats blue-box">
            <div class="icon"><i class="fa fa-user white"></i></div>
            <div class="count white">571</div>
            <h3 class="white">Total Patients</h3>
            <p class="white"><i class="fa fa-plus white"></i>&nbsp;4 From last Week</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats red-box">
            <div class="icon"><i class="fa fa-clock-o white"></i></div>
            <div class="count white">5</div>
            <h3 class="white">Patients Today</h3>
            <p class="white"><i class="fa fa-plus white"></i>&nbsp;2 From Yesterday</p>
          </div>
        </div>
        
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats green-box">
            <div class="icon"><i class="fa fa-clock-o white"></i></div>
            <div class="count white">27</div>
            <h3 class="white" >Scheduled Patients</h3>
            <p class="white"><i class="fa fa-minus white"></i>&nbsp;8 From last week</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats orange-box">
            <div class="icon"><i class="fa fa-clock-o white"></i></div>
            <div class="count white">18</div>
            <h3 class="white">To be scheduled</h3>
            <p class="white"><i class="fa fa-plus"></i>&nbsp;2 From last week</p>
          </div>
        </div>
      </div>
    </div>

@endsection
