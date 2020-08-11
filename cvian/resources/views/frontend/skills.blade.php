@extends('layouts.frontend_layouts.app')

@section('title', 'Skills')

@section('background_img')
style="background-image: url({{ asset('frontend_assets/img/bg-img/bg2.jpg') }});"
@endsection

@section('content')

<!-- ##### About Me Area Start ##### -->
<div class="about-me-area section-padding-100 clearfix">
	<div class="container-fluid">
		<div class="row align-items-end">
			<div class="col-12 col-xl-6">
				<div class="about-me-text">
					<h2>Creative &amp; Commited</h2>
					<h6>Nam id congue lectus, a venenatis massa. Maecenas justo libero, vulputate vel nunc id, blandit feugiat sem. Mauris impe rdiet, neque ornare varius.</h6>
				</div>
			</div>

			<div class="col-12 col-xl-6">
				<div class="about-me-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo fermentum, eu cursus nunc maximus. Integer convallis nisi nibh, et ornare neque ullamcorper ac. Nam id
						congue
						lectus, a venenatis massa. Maecenas justo libero, vulputate vel nunc id, blandit feugiat sem. Mauris imperdiet, neque ornare varius mattis.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ##### About Me Area End ##### -->

<!-- ##### Skilss Area Start ##### -->
<div class="skills-area clearfix">
	<div class="container-fluid">
		<div class="row">

			<!-- Single Skills Area -->
			@foreach ($skills as $skill)
			<div class="col-12 col-md-6 col-xl-3">
				<div class="single-skils-area mb-100">
					<div id="circle{{ $skill->id }}" class="circle" data-value="0.{{ $skill->skill_percentages }}">
						<span>{{ $skill->skill_percentages }}%</span>
					</div>
					<div class="skills-text">
						<h6>{{ $skill->skill_name }}</h6>
						<p>{{ $skill->skill_description }}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- ##### Skilss Area End ##### -->

<p class="mt-5"><a href="#">
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>
			document.write(new Date().getFullYear());
		</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>

@endsection
