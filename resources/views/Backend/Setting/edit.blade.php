@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit Setting</h2>
		</div>

	</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
{!! Form::model($item, ['method' => 'PATCH','novalidate' => 'novalidate','files' => true,'route' => ['setting.update', 1]]) !!}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Company Name:</strong>
			{!! Form::text('company_name', null, array('placeholder' => 'Company Name','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Email:</strong>
			{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>latitude:</strong>
			{!! Form::text('lat', null, array('placeholder' => 'Latitude','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>longitude:</strong>
			{!! Form::text('long', null, array('placeholder' => 'Longitude','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Address:</strong>
			{!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Telephone:</strong>
			{!! Form::text('tel', null, array('placeholder' => 'Telephone','class' => 'form-control')) !!}
		</div>
	</div>
	@if ($item->logo)
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<img src="{{url('/Uploads/setting/logo/'. $item->logo)}}" alt="" class="img-thumbnail img_view" />
		</div>
	</div>
	@endif
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Company Logo:</strong>
			{!! Form::file('logo', null, array('placeholder' => 'Company Logo','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
{!! Form::close() !!}
@endsection
