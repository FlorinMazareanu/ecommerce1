@extends('layout')
@section('content')

<div class="container">
	<div id="authentication">
		<div class="row">
			<div class="col-md-6">
				<form method="POST" action="/authentication/login">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h2>Login</h2>
					<div class="form-group">
						<label for="exampleInputEmail1">Email Address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="userEmail">
					</div>
					<div class="form-group">
   						<label for="exampleInputPassword1">Password</label>
    					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="userPassword">
  					</div>
  					<button type="submit" class="btn-lg btn-success">Submit</button>
				</form>
			</div>
			<div class="col-md-6">
				<form method="POST" action="/authentication/register">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h2>Create account</h2>
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="userName">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email Address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="userEmail">
					</div>
					<div class="form-group">
   						<label for="exampleInputPassword1">Enter Password</label>
    					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="userPassword">
  					</div>
  					<div class="form-group">
   						<label for="exampleInputPassword1">Confirm Password</label>
    					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="userPasswordConfirm">
  					</div>
  					<button type="submit" class="btn-lg btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

@stop