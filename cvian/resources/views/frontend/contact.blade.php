@extends('layouts.frontend_layouts.app')

@section('title', 'Contact')


@section('content')

<!-- ##### Contact Area Start ##### -->
<div class="contact--area">
	<div class="container-fluid">
		<div class="row align-items-end">

			<!-- Contact Form Area -->
			<div class="col-12 col-md-6">
				<div class="contact-area">

					<div class="section-heading mb-50">
						<h2>Get in touch</h2>
					</div>

					<div class="contact-form-area">
						<form action="#" method="post">
							<div class="row">
								<div class="col-12 col-lg-6">
									<input type="text" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="col-12 col-lg-6">
									<input type="email" class="form-control" id="email" placeholder="E-mail">
								</div>
								<div class="col-12">
									<input type="text" class="form-control" id="subject" placeholder="Subject">
								</div>
								<div class="col-12">
									<textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
								</div>
								<div class="col-12">
									<button class="btn vcard-btn mt-15" type="submit">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Google Maps -->
			<div class="col-12 col-md-6">
				<div class="map-area">
					<div id="googleMap"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ##### Contact Area End ##### -->

<!-- ##### Contact Information Area Start ##### -->
<div class="contact-information">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 d-flex flex-wrap align-items-center justify-content-between">
				<!-- Single Contact Information -->
				<div class="single-contact-info d-flex align-items-center">
					<div class="contact-icon">
						<img src="img/core-img/placeholder.png" alt="">
					</div>
					<div class="contact-text">
						<h6>Address:</h6>
						<p>1481 Creekside Lane Avila <br> Beach, CA 93424</p>
					</div>
				</div>

				<!-- Single Contact Information -->
				<div class="single-contact-info d-flex align-items-center">
					<div class="contact-icon">
						<img src="img/core-img/phone-call.png" alt="">
					</div>
					<div class="contact-text">
						<h6>Phone:</h6>
						<p>+53 345 7953 32453</p>
					</div>
				</div>

				<!-- Single Contact Information -->
				<div class="single-contact-info d-flex align-items-center">
					<div class="contact-icon">
						<img src="img/core-img/envelope.png" alt="">
					</div>
					<div class="contact-text">
						<h6>Email:</h6>
						<p>yourmail
							@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ##### Contact Information Area End ##### -->

<p class="mt-5"><a href="#">
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>
			document.write(new Date().getFullYear());
		</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
@endsection

@push('js')

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="js/google-map/map-active.js"></script>

@endpush
