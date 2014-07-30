@extends('account/calendar_sublayout')


@section('sub_custom_css')

@stop


@section('sub_content')

<header class="header bg-light bg-gradient">
	<ul class="nav nav-tabs nav-white">
		<li class="active"><a href="#activity" data-toggle="tab">Event</a></li>
		<li class=""><a href="#events" data-toggle="tab">Guests</a></li>
	</ul>
</header>



<div class="tab-content bg-white">
	<!-- 	Error / Session messages (if set) 	-->
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
			@if ($errors->any())
				<!-- 	Error messages (form) 	-->
				<div class="form-group m-t-lg">
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</ul>
					</div>
				</div>

			@elseif (Session::has('error_msg'))
				<!-- 	Error messages (session)	-->
				<div class="form-group m-t-lg">
					<div class="alert alert-danger">
						{{ Session::get('error_msg') }}
					</div>
				</div>

			@elseif (Session::has('success_msg'))
				<!-- 	Success messages (session) 	-->
				<div class="form-group m-t-lg">
					<div class="alert alert-success">
						{{ Session::get('success_msg') }}
					</div>
				</div>

			@endif
		</div>
	</div>

	<div class="tab-pane active" id="activity">

		<div class="wrapper m-t-md">
				<small class="text-uc text-xs text-muted">Title</small>
				<p class="m-l-lg">{{ empty($event_info) ? '' : $event_info['title'] }}</p>

				<small class="text-uc text-xs text-muted">Description</small>
				<p class="m-l-lg">{{ empty($event_info['description']) ? 'None' : $event_info['description'] }}</p>

				<small class="text-uc text-xs text-muted">Starts</small>
				<p class="m-l-lg">{{ empty($event_info) ? '' : date('g:i A D, M d Y', strtotime($event_info['start_time'])) }}</p>

				<small class="text-uc text-xs text-muted">Ends</small>
				<p class="m-l-lg">{{ empty($event_info) ? '' : date('g:i A D, M d Y', strtotime($event_info['end_time'])) }}</p>
		</div>

		<div class="wrapper">
			<section class="panel m-t-md">
				<form>
					<textarea class="form-control no-border" rows="3" placeholder="Leave a comment..."></textarea>
				</form>

				<footer class="panel-footer bg-light lter">
					<button class="btn btn-info pull-right btn-sm">POST</button>

					<ul class="nav nav-pills nav-sm">
						<li><a href="#"><i class="fa fa-camera"></i></a></li>
						<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
					</ul>
				</footer>
			</section>
		</div>

		<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
			<?php $i = 0; ?>
			@while (! empty($comment[$i]))
				<li class="list-group-item">
					<a href="#" class="thumb-sm pull-left m-r-sm">
						<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
					</a>
					<a href="#" class="clear">
						<small class="pull-right">{{ date('g:i A D, m/d/y', strtotime($comment[$i]->created_at)) }}</small>
						<strong class="block">{{ User::find($comment[$i]->commenter_id)->get('first_name') }}</strong>
						<small>{{ $comment[$i]->comment }}</small>
					</a>
				</li>
				<?php $i++; ?>
			@endwhile
		</ul>
	</div>

	<div class="tab-pane" id="events">
		<div class="text-center wrapper">
			<i class="fa fa-spinner fa fa-spin fa fa-large"></i>
		</div>
	</div>

	<div class="tab-pane" id="interaction">
		<div class="text-center wrapper">
			<i class="fa fa-spinner fa fa-spin fa fa-large"></i>
		</div>
	</div>
</div>

@stop


@section('sub_custom_js')

@stop