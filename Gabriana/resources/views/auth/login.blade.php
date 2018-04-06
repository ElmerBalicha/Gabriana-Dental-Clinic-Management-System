@extends('layouts.loginLayout')

@section('content')
<section class="container login-form">
    <section>
        <form method="post" action="{{ route('login.custom') }}" role="login">
            {{ csrf_field() }}
            <img src="{{ asset('design/login/assets/images/logoHD.png') }}" alt="" class="img-responsive" />
        
            <div class="form-group">
                <input type="email" name="email" required class="form-control" placeholder="Enter email or nickname" />
                <span class="glyphicon glyphicon-user"></span>
            </div>
            
            <div class="form-group">
                <input type="password" name="password" required class="form-control" placeholder="Enter password" />
                <span class="glyphicon glyphicon-lock"></span>
            </div>
            
            <button type="submit" name="go" class="btn btn-primary btn-block">Login Now</button>
            
            <a class="btn btn-link-1" href="#">Reset password</a> or<a class="btn btn-link-1 launch-modal" href="/admin" data-modal-id="modal-register">Create account</a> 
        </form>
  
        <!-- MODAL -->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label">Sign up now</h3>
        				<p>Fill in the form below to get instant access:</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form method="POST" action="{{ route('register') }}" class="registration-form">
                            {{ csrf_field() }}
	                    	<div class="form-group">
	                        	<input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                            </div>
                            <div class="form-group">
	                        	<input type="password" name="password" placeholder="Password..." class="form-email form-control" id="form-password">
							</div>    
							<div class="form-group">
	                        	<input type="password" name="password_confirmation" placeholder="Retype password" class="form-email form-control" id="form-password">
                            </div>                        
	                        <button type="submit" class="btn" name="go" >Sign me up!</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
    </section>
</section>
@endsection	







