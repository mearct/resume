@extends('layouts.frontend_layouts.app')

@section('title', 'Portfolios')


@section('content')

<!-- ##### Portfolio Area Start ##### -->
<div class="portfolio-area clearfix">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="vcard-projects-menu">
					<div class="portfolio-menu">
						<button class="btn active" data-filter="*">Digital Design</button>
						<button class="btn" data-filter=".web">Web Design</button>
						<button class="btn" data-filter=".brand">Brand Identity</button>
						<button class="btn" data-filter=".illustrations">Illustrations</button>
						<button class="btn" data-filter=".motion">Motion Graphics</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row vcard-portfolio">

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area web brand">
				<img src="img/bg-img/p1.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Brand identity - Company</h5>
					<a href="#" class="catagory">Branding</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p1.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area brand illustrations">
				<img src="img/bg-img/p2.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Device Mockup</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p2.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area web illustrations">
				<img src="img/bg-img/p3.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Brand identity - Company</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p3.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area brand motion">
				<img src="img/bg-img/p4.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Device Mockup</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p4.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area brand motion">
				<img src="img/bg-img/p6.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Brand identity - Company</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p6.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area web motion">
				<img src="img/bg-img/p8.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Device Mockup</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p8.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area illustrations motion">
				<img src="img/bg-img/p5.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Brand identity - Company</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p5.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area illustrations motion">
				<img src="img/bg-img/p7.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Device Mockup</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p7.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<!-- Single gallery Item -->
			<div class="col-12 col-sm-6 col-xl-4 single-portfolio-area web motion">
				<img src="img/bg-img/p9.jpg" alt="">
				<!-- Content -->
				<div class="portfolio-content">
					<h5>Device Mockup</h5>
					<a href="#" class="catagory">Digital Design</a>
					<!-- Zoom View -->
					<div class="vcard-img-zoom">
						<a href="img/bg-img/p9.jpg" class="img-url"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

		</div>

		<!-- See More Button -->
		<div class="row">
			<div class="col-12">
				<div class="see-more mt-70 text-center mb-100">
					<a href="#" class="btn vcard-btn">See Portfolio</a>
				</div>
			</div>
		</div>

		<p class="mt-5"><a href="#">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</div>
</div>
<!-- ##### Portfolio Area End ##### -->

@endsection
