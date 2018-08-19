@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Customer CRUD</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('customer.create') }}"> Create New Customer</a>
		</div>
	</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Sort</th>
		<th>Title</th>
		<th>Main Image</th>
		<th width="280px">Action</th>
	</tr>
	@foreach ($customer as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->sort }}</td>
		<td>{{ $item->title }}</td>
		<td><img src="{{url('/Uploads/customer/'. $item->image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>
			<a class="btn btn-info" href="{{ route('customer.show',$item->customer_id) }}">Show</a>
			<a class="btn btn-primary" href="{{ route('customer.edit',$item->customer_id) }}">Edit</a>
			{!! Form::open(['method' => 'DELETE','route' => ['customer.destroy', $item->customer_id],'style'=>'display:inline']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>
{!! $customer->render() !!}
@endsection
