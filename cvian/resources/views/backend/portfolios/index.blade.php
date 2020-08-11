@extends('layouts.backend_layouts.app')
@section('title', 'Portfolios')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush


@section('add_button', 'Add Portfolios')
@section('data_target', 'add_portfolios')
@section('activate_button', 'Activate Portfolios')
@section('data_activate', 'activate_portfolios')
@section('page_title', 'Portfolios')

@section('content')

@foreach ($portfolios as $key => $portfolio)

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
									@if (empty($portfolio->image_portfolio))
									@else
									<img src="{{ asset('/uploads/'.$portfolio->image_portfolio) }}" width="100%">
									@endif
								</div>
							</div>
							<div class="col-md-7">
								<ul class="personal-info">
									<li>
										<div class="title">Portfolio:</div>
										<div class="text">
											<p>{{ $portfolio->name_portfolio }}</p>
										</div>
									</li>
									<li>
										<div class="title">Types:</div>
										<div class="text">
											<p>{{ $portfolio->types_portfolio }}</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pro-edit"><a data-target="#edit_portfolios{{ $portfolio->id }}" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
					<div class="pro-delete"><a data-target="#deactivate_portfolios{{ $portfolio->id }}" data-toggle="modal" class="delete-icon" href="#"><i class="fa fa-trash"></i></a></div>
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

@include('backend.portfolios.update')
@include('backend.portfolios.deactivate')

@endforeach

@include('backend.portfolios.create')
@include('backend.portfolios.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
