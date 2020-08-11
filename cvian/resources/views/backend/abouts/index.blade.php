@extends('layouts.backend_layouts.app')
@section('title', 'About')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush


@section('add_button', 'Add About')
@section('data_target', 'add_about')
@section('activate_button', 'Activate About')
@section('data_activate', 'activate_about')
@section('page_title', 'About')

@section('content')

@foreach ($abouts as $key => $about)

<div class="card mb-0">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<div class="profile-view">
					<div class="profile-img-wrap">
						<div class="profile-img">

						</div>
					</div>
					<div class="profile-basic">
						<div class="row">
							<div class="col-md-5">
								<div class="profile-info-left">
									@if (empty($about->image))
									@else
									<img src="{{ asset('/uploads/'.$about->image) }}" width="100%">
									@endif
								</div>
							</div>
							<div class="col-md-7">
								<ul class="personal-info">
									<li>
										<div class="title">First Name:</div>
										<div class="text">
											<p>{{ $about->name_first}}</p>
										</div>
									</li>
									<li>
										<div class="title">Middle Name:</div>
										<div class="text">
											<p>{{ $about->name_middle }}</p>
										</div>
									</li>
									<li>
										<div class="title">Last Name:</div>
										<div class="text">
											<p>{{ $about->name_last }}</p>
										</div>
									</li>
									<li>
										<div class="title">Phone:</div>
										<div class="text">
											<p>{{ $about->phone_num }}</p>
										</div>
									</li>
									<li>
										<div class="title">Email:</div>
										<div class="text">
											<p>{{ $about->email }}</p>
										</div>
									</li>
									<li>
										<div class="title">Job:</div>
										<div class="text">
											<p>{{ $about->designation }}</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pro-edit"><a data-target="#edit_about{{ $about->id }}" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
					<div class="pro-delete"><a data-target="#deactivate_about{{ $about->id }}" data-toggle="modal" class="delete-icon" href="#"><i class="fa fa-trash"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card tab-box">
	<div class="row user-tabs">
		<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
			<ul class="nav nav-tabs nav-tabs-bottom">

			</ul>
		</div>
	</div>
</div>

@include('backend.abouts.update')
@include('backend.abouts.deactivate')

@endforeach

@include('backend.abouts.create')
@include('backend.abouts.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
