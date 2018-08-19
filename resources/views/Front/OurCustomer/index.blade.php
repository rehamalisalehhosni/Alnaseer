@extends('layouts.defaultPage')
@section('content')
<section class='customers-section text-center py-md-5 px-2 px-md-5'>
	<h1 class='tilte  text-uppercase'> Our Customers</h1>
	<div class='clients py-4 px-2 px-3'>
		<div class="swiper-button-next swiper-button-black"></div>
		<div class="swiper-button-prev swiper-button-black"></div>
		<div class="swiper-pagination"></div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				@foreach ($customer as $key => $item)
				<?php $data="";?>
					@foreach ($item->services as $serve)
					 <?php
	   				 $data.=" <span class='nav-link'>".$serve->title ."</span>";
					 ?>
					@endforeach
					<?php
						if($key==0){
							$fir=$data;
						}
					?>

				<div class="swiper-slide" id="slide_{{$key}}" data="{!!$data!!}">
					<span class='inner'>
						<img src="{{url('/Uploads/customer/'. $item->image)}}" alt="{{$item->title}}">
					</span>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class='clients d-md-flex align-items-center py-4 mt-2 px-3'>

		<div class='inner d-lg-flex align-items-center w-100'>
			<span class='sm_title'>Services Provided:</span>
 			<nav class="nav services_customer d-block">
				{!! $fir !!}
			</nav>
		</div>

	</div>





	<script>
	$(document).ready(function() {
		if($('.clients .swiper-container').length)
		{
			var n_Swiper = new Swiper('.clients .swiper-container', {
				loop: false,
				spaceBetween: 15,
				slidesPerView: 5,
				slidesPerGroup: 5,
				nextButton: '.clients .swiper-button-next',
				prevButton: '.clients .swiper-button-prev',
				pagination:'.clients .swiper-pagination',
				paginationClickable: true,
				speed: 500,
				preventClicks: false,
				onClick: (swiper, event) => {
					let index = swiper.clickedIndex; //slide that was clicked
					$('.services_customer').html($('#slide_'+index).attr('data'));
				},

				breakpoints: {
					// when window width is <= 480px
					480: {
						slidesPerView:2,
						slidesPerGroup: 2,
					},
					// when window width is <= 640px
					640: {
						slidesPerView: 4,
						slidesPerGroup: 4,
					},
					1300: {
						slidesPerView: 4,
						slidesPerGroup: 4,
					},
				}
			});

		}
	});

</script>
</section>
@endsection
