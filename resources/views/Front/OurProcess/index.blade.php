@extends('layouts.defaultPage')
@section('content')
<section class='process-section px-4 px-md-0'>
	<div class='row h-100'>
		<div class='col-md-7 h-100 d-flex justify-content-center align-items-end over-hidden'>
			<img src="{{url('/Uploads/our_process/'. $ourProcess->image)}}"  class='p_img' alt=''/>
		</div>
		<div class='col-md-5 h-100 pr-md-5'>
			<div class='scroller'>
				{!! $ourProcess->content !!}
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function() {
		function initVacanvyheight() {
			$(".scroller").mCustomScrollbar();
			if (($(document).width()) >= 768) {
				$(".scroller").mCustomScrollbar({});
				var newHeight =$('.process-section').outerHeight() -  0;
				$(".scroller").css('max-height', newHeight);
				$(".scroller").mCustomScrollbar({});
			} else {
				$(".scroller").mCustomScrollbar("destroy");
			}
		}
		initVacanvyheight();
		$(window).resize(function() {
			initVacanvyheight();
		})
	})
</script>
</section>
@endsection
