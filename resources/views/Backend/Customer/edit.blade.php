@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit  Customer</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
		</div>
	</div>
</div>
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
{!! Form::model($item, ['method' => 'PATCH','novalidate' => 'novalidate','files' => true,'route' => ['customer.update', $item->customer_id]]) !!}
<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Title:</strong>
			{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
		</div>
	</div>

	@if ($item->image)
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<img src="{{url('/Uploads/customer/'. $item->image)}}" alt="" class="img-thumbnail img_view" />
		</div>
	</div>
	@endif
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Main Image :</strong>
			{!! Form::file('image', null, array('placeholder' => 'Main Image','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Services :</strong>
			{!! Form::select('services_id[]', $services, $customerServices,['class' => 'form-control selectpicker', 'multiple' => 'multiple','data-live-search'=>'true']) !!}
		</div>
	</div>
	<!--<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Publish :</strong>
			{!! Form::checkbox('publish', '1') !!}
		</div>
	</div>-->
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group ">
			<strong>Sort:</strong>
			{!! Form::text('sort', null, array('placeholder' => 'Sort','class' => 'form-control  ')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
{!! Form::close() !!}
@endsection
