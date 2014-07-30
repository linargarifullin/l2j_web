@extends('auth/auth_layout')

@section('content')

{{ Form::open(['class' => 'panel-body', 'url' => '/users', 'autocomplete' => 'on']) }}

	<h2>Please Sign Up</h2>

	<hr class="colorgraph" />

	<div class="row">
		<!-- 	First Name 	-->
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="text" name="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" autofocus />
			</div>
		</div>

		<!-- 	Last Name 	-->
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="text" name="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" />
			</div>
		</div>
	</div>

	<!-- 	Email 	-->
	<div class="form-group">
		<input type="email" name="email" class="form-control input-lg" placeholder="Email Address" tabindex="3" />
	</div>

	<div class="row">
		<!-- 	Password 	-->
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="4" />
			</div>
		</div>

		<!-- 	Confirm Password 	-->
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="password" name="password_confirmation" class="form-control input-lg" placeholder="Confirm" tabindex="5" />
			</div>
		</div>
	</div>

	<!-- 	Terms & Conditions 	-->
	<label>
		<input type="checkbox" name="terms" /> I agree with
		<a href="#" data-toggle="modal" data-target="#t_and_c_m" style="border-bottom: 1px dotted gray;">
			<b>Terms and Conditions</b>
		</a>
	</label>


	<hr class="colorgraph" />

	<!-- 	Register (button) 	-->
	<input type="submit" value="Sign Up" class="btn btn-primary btn-block btn-lg" tabindex="6">

	<br>

	<!-- 	Sign In (link) 	-->
	<label>Already have an account? <a href="/auth/login" class="important_link">Sign in</a>.</label>

{{ Form::close() }}

<!-- 	Terms & Conditions (modal) 	-->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">`
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Term 1</p>
				<p>Term 2</p>
				<p>Term 3</p>
				<p>Term 4</p>
				<p>Term 5</p>
				<p>Term 6</p>
				<p>Term 7</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop