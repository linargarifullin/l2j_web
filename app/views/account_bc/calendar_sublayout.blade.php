@extends('account/account_layout')

@section('custom_css')
	<link rel="stylesheet" href=" {{ asset('packages/todo/js/calendar/bootstrap_calendar.css') }}" type="text/css" />
	<link rel="stylesheet" href=" {{ asset('packages/todo/js/slider/slider.css') }}" type="text/css" />
	<link rel="stylesheet" href=" {{ asset('css/calendar.css') }}" type="text/css" />
	@yield('sub_custom_css')
@stop

@section('content')

<aside class="aside-lg bg-white b-r" id="calendar-side">
	<section class="vbox">
		<section class="scrollable">

		<div class="wrapper b-t">

			<!--  Create Event button  -->
			<div class="text-center clearfix">
				<a class="btn btn-success m-b-lg m-t-lg" href="{{ url('account/events/create') }}">
					<i class="fa fa-plus"></i>&nbsp;&nbsp;Create Event
				</a>
			</div>

			<!--  Calendar  -->
			<div id="calendar" class="m-t-lg"></div>

			<!--  Events for the day  -->
			<div class="list-group bg-white m-t-lg" id="event-list"></div>

		</div>
		</section>
	</section>
</aside>


<aside class="b-t" id="right-aside">
	<section class="vbox">
		<section class="scrollable">
			@yield('sub_content')
		</section>
	</section>
</aside>


@stop


@section('custom_js')
	<!--  slider  -->
	<script src="{{ asset('packages/todo/js/slider/bootstrap-slider.js') }}"></script>
	<!--  calendar  -->
	<script src="{{ asset('packages/todo/js/calendar/bootstrap_calendar.js') }}" cache="false"></script>
	<script src="{{ asset('packages/todo/js/libs/jquery.pjax.js') }}" cache="false"></script>
	<script>

		window.onhashchange = function(evt){
			hash = evt.newURL.split("#display_date=")[1];
			$.ajax({
				type: "GET",
				url: "{{ url('account/eventlist?date=') }}"+hash
			})
				.done(function(msg){

					$("#event-list").html(msg);

				});
		};

		$(document).ready( function(){

			theMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
			theDays = ["S", "M", "T", "W", "T", "F", "S"];

			$('#calendar').calendar({
				months: theMonths,
				days: theDays,
				req_ajax: {
					type: 'get',
					url: '{{ url('account/pullcalendar') }}'
				}
			});

		});
  </script>
  @yield('sub_custom_js')

@stop