@extends('layouts.frontend_layouts.app')

@section('title', 'Services')

@section('background_img')
style="background-image: url({{ asset('frontend_assets/img/bg-img/bg4.jpg') }});"
@endsection

@section('content')

<!-- ##### Services Area Start ##### -->
<div class="services-area mt-100 clearfix">
	<div class="container-fluid">
		<div class="row">
			<!-- Section Heading -->
			<div class="col-12">
				<div class="section-heading">
					<h2>Personal Services</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Single Service Area -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="single-service-area mb-100">
					<div class="service-title d-flex align-items-end">
						<div class="icon">
							<img src="img/core-img/vector2.png" alt="">
						</div>
						<h4>Digital Design</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
				</div>
			</div>

			<!-- Single Service Area -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="single-service-area mb-100">
					<div class="service-title d-flex align-items-end">
						<div class="icon">
							<img src="img/core-img/settings2.png" alt="">
						</div>
						<h4>Illustrations</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
				</div>
			</div>

			<!-- Single Service Area -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="single-service-area mb-100">
					<div class="service-title d-flex align-items-end">
						<div class="icon">
							<img src="img/core-img/monitor3.png" alt="">
						</div>
						<h4>Web Design</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
				</div>
			</div>

			<!-- Single Service Area -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="single-service-area mb-100">
					<div class="service-title d-flex align-items-end">
						<div class="icon">
							<img src="img/core-img/copy2.png" alt="">
						</div>
						<h4>Logo Design</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
				</div>
			</div>

			<!-- Single Service Area -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="single-service-area mb-100">
					<div class="service-title d-flex align-items-end">
						<div class="icon">
							<img src="img/core-img/pie-chart.png" alt="">
						</div>
						<h4>Brand Identity</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
				</div>
			</div>

			<!-- Single Service Area -->
			<div class="col-12 col-md-6 col-xl-4">
				<div class="single-service-area mb-100">
					<div class="service-title d-flex align-items-end">
						<div class="icon">
							<img src="img/core-img/star2.png" alt="">
						</div>
						<h4>Motion Graphics</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ##### Services Area End ##### -->

<p class="mt-5"><a href="#">
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>
			document.write(new Date().getFullYear());
		</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>

@endsection
