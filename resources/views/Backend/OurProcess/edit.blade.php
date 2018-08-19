@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit Our Process</h2>
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
{!! Form::model($item, ['method' => 'PATCH','novalidate' => 'novalidate','files' => true,'route' => ['ourProcess.update', 1]]) !!}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group ">
			<strong>Content:</strong>
			{!! Form::textarea('content', null, array('placeholder' => 'Content','class' => 'form-control tinymce ','style'=>'height:100px')) !!}
		</div>
	</div>
	@if ($item->image)
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<img src="{{url('/Uploads/our_process/'. $item->image)}}" alt="" class="img-thumbnail img_view" />
		</div>
	</div>
	@endif
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Image:</strong>
			{!! Form::file('image', null, array('placeholder' => 'Image','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
{!! Form::close() !!}
@endsection
