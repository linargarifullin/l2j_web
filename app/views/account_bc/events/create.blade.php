@extends('account/calendar_sublayout')


@section('sub_custom_css')
	<link rel="stylesheet" href=" {{ asset('packages/todo/js/datepicker/datepicker.css') }}" type="text/css" />
@stop


@section('sub_content')

<section class="panel" id="create-event">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">

			<!-- 	Error Messages (form) 	-->
			@if ($errors->any())
				<div class="form-group m-t-lg">
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</ul>
					</div>
				</div>
			@endif

		</div>
	</div>

	<div class="panel-body">

		{{ Form::open(['class' => 'form-horizontal', 'url' => '../account/events', 'autocomplete' => 'on']) }}

			<!-- 	Title 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Title *</label>
				<div class="col-sm-8">
					<input type="text" name="title" class="form-control m-b" tabindex="1" autofocus />
				</div>
			</div>

			<!-- 	Description 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Description</label>
				<div class="col-sm-8">
					<textarea class="form-control m-b" tabindex="2" name="description" style="max-width:100% !important;height:75px;max-height:75px;"></textarea>
				</div>
			</div>

			<div class="line line-dashed line-lg pull-in"></div>

			<!-- 	Starts 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Starts *</label>
				<div class="col-sm-10">
					<!-- 	Date 	-->
					<input class="datepicker-input form-control inline" size="16" type="text" value="2014-04-30" data-date-format="yyyy-mm-dd" name="start_date" tabindex="3" />

					<!-- 	Time 	-->
					<span>&nbsp;&nbsp;-&nbsp;&nbsp;
						<!-- 	hour 	-->
						<select class="hour form-control inline" name="start_hour" tabindex="4" style="width: auto;">
							<option value="12">12</option>
							@for ($i = 1; $i < 12; $i++)
								<option value="{{ $i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
							@endfor
						</select>&nbsp;&nbsp;:&nbsp;

						<!-- 	minute 	-->
						<select class="minute form-control inline" name="start_minute" tabindex="5" style="width: auto;">
							<option value="00">00</option>
							@for ($i = 5; $i < 60; $i += 5)
								<option value="{{ ($i < 10 ? '0' : '').$i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
							@endfor
						</select>&nbsp;&nbsp;

						<!-- 	AM/PM 	-->
						<select class="ampm form-control inline" name="start_ampm" tabindex="6" style="width: auto;">
							<option value="PM">PM</option>
							<option value="AM">AM</option>
						</select>
					</span>
				</div>
			</div>

			<!-- 	Ends 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Ends *</label>
				<div class="col-sm-10">
					<!-- 	Date 	-->
					<input class="datepicker-input form-control inline" size="16" type="text" value="2014-04-30" data-date-format="yyyy-mm-dd" name="end_date" tabindex="7" />

					<!-- 	Time 	-->
					<span>&nbsp;&nbsp;-&nbsp;&nbsp;
						<!-- 	hour 	-->
						<select class="hour form-control inline" name="end_hour" tabindex="8" style="width: auto;">
							<option value="12">12</option>
							@for ($i = 1; $i < 12; $i++)
								<option value="{{ $i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
							@endfor
						</select>&nbsp;&nbsp;:&nbsp;

						<!-- 	minute 	-->
						<select class="minute form-control inline" name="end_minute" tabindex="9" style="width: auto;">
							<option value="00">00</option>
							@for ($i = 5; $i < 60; $i += 5)
								<option value="{{ ($i < 10 ? '0' : '').$i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
							@endfor
						</select>&nbsp;&nbsp;

						<!-- 	AM/PM 	-->
						<select class="ampm form-control inline" name="end_ampm" tabindex="10" style="width: auto;">
							<option value="PM">PM</option>
							<option value="AM">AM</option>
						</select>
					</span>
				</div>
			</div>

			<div class="line line-dashed line-lg pull-in"></div>

			<!-- 	Address 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Address *</label>
				<div class="col-sm-8">
					<input type="text" name="address" class="form-control m-b" tabindex="11" />
				</div>
			</div>

			<!-- 	City 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">City *</label>
				<div class="col-sm-8">
					<input type="text" name="city" class="form-control m-b" tabindex="12" />
				</div>
			</div>

			<!-- 	State 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">State *</label>
				<div class="col-sm-10">
						<select class="form-control m-b" name="state" style="width:180px" tabindex="13">
							<option value="">select</option>
							<optgroup label="Alaskan/Hawaiian Time Zone">
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
							</optgroup>
							<optgroup label="Pacific Time Zone">
								<option value="CA">California</option>
								<option value="NV">Nevada</option>
								<option value="OR">Oregon</option>
								<option value="WA">Washington</option>
							</optgroup>
							<optgroup label="Mountain Time Zone">
								<option value="AZ">Arizona</option>
								<option value="CO">Colorado</option>
								<option value="ID">Idaho</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NM">New Mexico</option>
								<option value="ND">North Dakota</option>
								<option value="UT">Utah</option>
								<option value="WY">Wyoming</option>
							</optgroup>
							<optgroup label="Central Time Zone">
								<option value="AL">Alabama</option>
								<option value="AR">Arkansas</option>
								<option value="IL">Illinois</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="OK">Oklahoma</option>
								<option value="SD">South Dakota</option>
								<option value="TX">Texas</option>
								<option value="TN">Tennessee</option>
								<option value="WI">Wisconsin</option>
							</optgroup>
							<optgroup label="Eastern Time Zone">
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="IN">Indiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="OH">Ohio</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WV">West Virginia</option>
							</optgroup>
						</select>
				</div>
			</div>

			<!-- 	Zip 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Zip *</label>
				<div class="col-sm-10">
					<input type="text" class="form-control m-b" name="zip" tabindex="14" style="width: 70px;" />
				</div>
			</div>

			<div class="line line-dashed line-lg pull-in"></div>

			<!-- 	Age Limits 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Age Limit</label>
				<div class="col-sm-10">
					<select class="form-control m-b inline" name="min_age" tabindex="15" style="width: auto;">
						<option value="">Min</option>
						@for ($i = 1; $i < 100; $i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
					&nbsp;&nbsp;-&nbsp;&nbsp;
					<select class="form-control m-b inline" name="max_age" tabindex="16" style="width: auto;">
						<option value="">Max</option>
						@for ($i = 1; $i < 100; $i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
				</div>
			</div>

			<!-- 	Status 	-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Status *</label>
				<div class="col-sm-10">
					<select class="form-control m-b" name="status" tabindex="17" style="width: auto;">
						@foreach ($statuses as $status)
							<option value="{{ $status->status_id }}">{{ $status->title }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="line line-dashed line-lg pull-in"></div>

			<!-- 	Submit changes 	-->
			<div class="form-group">
				<div class="col-sm-12 col-sm-offset-2">
					<a href="#" class="btn btn-white">Cancel</a>
					<button type="submit" class="btn btn-primary m-l-lg">Create</button>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</section>

@stop


@section('sub_custom_js')
	<!--  datepicker  -->
	<script src="{{ asset('packages/todo/js/datepicker/bootstrap-datepicker.js') }}"></script>
@stop