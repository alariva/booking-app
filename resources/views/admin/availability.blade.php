@extends('admin/layout')
@section('content')
<div class="col-lg-8">
	<div id="error"></div>
	<div id="calendar"></div>
</div>
<div class="col-lg-4">
	<legend> Details </legend>
	<div id="availability-details">
		<p>Click on an appointment to show details.</p>
	</div>
</div>

<script src="{{ asset('/js/admin/availability.js') }}"></script>
@endsection