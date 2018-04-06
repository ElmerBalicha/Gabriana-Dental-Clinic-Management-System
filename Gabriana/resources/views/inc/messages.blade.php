<center>
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class="alert alert-success" style = "margin: 0px 0px 0px 230px">
            {{session('success')}}
        </div> 
@endif

@if(session('error'))
        <div class="alert alert-danger" style = "margin: 0px 0px 0px 230px">
            {{session('error')}}
        </div> 
@endif
</center>