@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2> Show Customer</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Title:</strong>
			{{ $item->title }}
		</div>
	</div>
	@if ($item->image)
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<img src="{{url('/Uploads/customer/'. $item->image)}}" alt="" class="img-thumbnail img_view" />
		</div>
	</div>
	@endif
</div>
@endsection
