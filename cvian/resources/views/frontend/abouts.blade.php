@extends('layouts.frontend_layouts.app')

@section('title', 'About')

@section('background_img')
style="background-image: url({{ asset('frontend_assets/img/bg-img/bg3.jpg') }});"
@endsection
@section('content')
	<!-- Hero Content -->
	<div class="hero-area horizontal clearfix">
		<div class="hero-content">
@foreach ($abouts as $key => $about)

			<h5>Hello I’m</h5>
			<h2>{{ $about->name_first.' '.$about->name_middle.' '.$about->name_last }}</h2>
			<h3>{{ $about->designation }}</h3>
			<!-- Contact Info -->
			<div class="contact-info mt-30">
				<a href="#"><img src="{{ asset('frontend_assets/img/core-img/envelope2.png') }}" alt="">{{ $about->email }}</a>
						<a href="#"><img src="{{ asset('frontend_assets/img/core-img/phone-call2.png') }}" alt="">{{ $about->phone_num }}</a>
						<a href="#"><img src="{{ asset('frontend_assets/img/core-img/monitor2.png') }}" alt="">{{ $about->name_last }} www.mytemplatename.com</a>

</div>
			<!-- Social Info -->
			<div class="social-info mt-30">
				<a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>

@endforeach

		</div>

		<p class="mt-5"><a href="#">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</div>
@endsection


@push('js')

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
	<script src="js/google-map/map-active.js"></script>

@endpush
