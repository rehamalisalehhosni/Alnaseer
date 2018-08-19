@extends('layouts.defaultPage')
@section('content')
<section class='contact_info px-4'>
	<div class='row'>
		<div class='col-md-7'>
			<div id="googleMap" class='contact_map'></div>
		</div>
		<div class='col-md-5 pl-md-4'>
			<div class="py-3">
				<address>
					<div class="d-flex align-items-center mb-3">
						<i class="fa fa-map-marker mr-3" aria-hidden="true"></i>
						<div>
							{{$setting->address}}
						</div>
					</div>
					<div class="d-flex align-items-center mb-3">
						<i class="fa fa-phone mr-3" aria-hidden="true"></i>
						<div>
							<a href="tel:{{$setting->tel}}">{{$setting->tel}}</a>
						</div>
					</div>
					<div class="d-flex align-items-center mb-3">
						<i class="fa fa-envelope-o mr-3" aria-hidden="true"></i>
						<div>
							<a href="mailto:{{$setting->email}}">  {{$setting->email}} </a>
						</div>
					</div>
				</address>
			</div>
		</div>
	</div>
	<div class='my-3'>
		<h1 class='tilte black-text text-uppercase'> Send Us A message</h1>
		<h5 class ='mb-3'>We Will Reply To Any Inquiries Within One Business Day </h5>
		@if ($message = Session::get('success'))
		<div class="alert alert-success mt-5">
			<p> The Request Was Successfully Sent </ p>
			</div>
			@else
			{!! Form::open(array('route' => ['contactUs.store'],'method'=>'POST','novalidate' => 'novalidate','files' => true)) !!}

			<div class="row mb-2">
				<div class="col-md-4 form-group">
					{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
					<div class="form-control-feedback {{ $errors->first('name') ?'':'d-none' }}"> {{ $errors->first('name') }}  </div>
				</div>
				<div class="col-md-4 form-group">
					{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
					<div class="form-control-feedback {{ $errors->first('email') ?'':'d-none' }}"> {{ $errors->first('email') }}  </div>
				</div>
				<div class="col-md-4 form-group">
					{!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
					<div class="form-control-feedback {{ $errors->first('phone') ?'':'d-none' }}"> {{ $errors->first('phone') }}  </div>
				</div>
			</div>
			<div class="row mb-2">
				<div class="form-group col-12">
					{!! Form::textarea('message',null,['class' => 'form-control','placeholder'=>"Message","rows"=>'4']) !!}
					<div class="form-control-feedback {{ $errors->first('message') ?'':'d-none' }}"> {{ $errors->first('message') }}  </div>
				</div>
			</div>
			<div class="text-center row">
				<button role="button" type="submit" class="btn m-auto btn-primary min-wdth ">Send </button>
			</div>
			{!! Form::close() !!}
			@endif
		</div>
		<script type="text/javascript">
		function myMap() {
			var latlng = new google.maps.LatLng( {{$setting->lat}},{{$setting->long}});
			var style=[
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#e9e9e9"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f5f5f5"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f5f5f5"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dedede"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#ffffff"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"saturation": 36
						},
						{
							"color": "#333333"
						},
						{
							"lightness": 40
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f2f2f2"
						},
						{
							"lightness": 19
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#fefefe"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#fefefe"
						},
						{
							"lightness": 17
						},
						{
							"weight": 1.2
						}
					]
				}
			]

			var mapProp= {
				center: latlng,
				styles:style,
				zoom:10,
				disableDefaultUI: true,
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			addmarker(latlng)
			function addmarker(latlng) {
				var marker = new google.maps.Marker({
					position: latlng,
					title: '{{$setting->company_name}}',
					map: map,
					icon:"{{url('front/images/marker.png')}}",

				});
				map.setCenter(marker.getPosition())
				var infoWindow = new google.maps.InfoWindow({content: "{{$setting->address}}"});
				google.maps.event.addListener(marker, "click", function(){
					infoWindow.open(map, marker)
				});
			}
		}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>

	</section>

	@endsection
