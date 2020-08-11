@extends('layouts.frontend_layouts.app')

@section('title', 'Education')


@section('content')
<!-- Work Experience Area -->
<div class="education-area">
	<div class="container-fluid">
		<div class="row">
			<!-- Section Heading -->
			<div class="col-12">
				<div class="section-heading">
					<h2>Education</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="education-timeline-wrapper">
					<!-- Timeline Row -->
					<div class="timeline-row"></div>

					@foreach ($educations as $key => $education)

					@if($loop->iteration % 2 == 0)
					<div class="single-education-timeline d-flex even-item">
					 <div class="education-icon mr-15">

						 @if (empty($education->image_education))
						 @else
						 <img src="{{ asset('/uploads/'.$education->image_education) }}" width="100%">
						 @endif

					 </div>
					 <div class="education-content">
						 <h5>{{ $education->date_education }}</h5>
						 <h4>{{ $education->course_education }}</h4>
						 <h6>{{ $education->school_education }}</h6>
						 <p>{{ $education->description_education }}</p>
					 </div>
				 </div>
					    @else
							<div class="single-education-timeline d-flex active odd-item">
								<div class="education-icon mr-15">

									@if (empty($education->image_education))
									@else
									<img src="{{ asset('/uploads/'.$education->image_education) }}" width="100%">
									@endif

								</div>
								<div class="education-content">
									<h5>{{ $education->date_education }}</h5>
									<h4>{{ $education->course_education }}</h4>
									<h6>{{ $education->school_education }}</h6>
									<p>{{ $education->description_education }}</p>
								</div>
							</div>
					    @endif


					@endforeach
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

@endsection
