@extends('layouts.backend_layouts.app')
@section('title', 'Experiance')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush

@section('add_button', 'Add Experiences')
@section('data_target', 'add_experiences')
@section('activate_button', 'Activate Experiences')
@section('data_activate', 'activate_experiences')

@section('content')

<div class="tab-content">
    <!-- Profile Info Tab -->
    <div id="emp_profile" class="pro-overview tab-pane fade show active">
        <div class="row">
            @foreach ($experiences as $experience)
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $experience->experiences_date_start. ''.$experience->date_end_experiences }}
                            <a href="#" class="edit-icon" data-toggle="modal" data-target="#edit_experiences{{ $experience->id }}"><i class="fa fa-pencil"></i></a>
                        </h3>
                        <h2>{{ $experience->experiences_designation }}</h2>
                        <h4>{{ $experience->experiences_company }}</h4>
                        <div class="experience-box">
                            <ul class="experience-list">
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <p>{{ $experience->experiences_description }}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="delete-icon" data-toggle="modal" data-target="#deactivate_experiences{{ $experience->id }}"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
            @include('backend.experiences.update')
            @include('backend.experiences.deactivate')
            @endforeach
        </div>
    </div>
    <!-- /Profile Info Tab -->
</div>

@include('backend.experiences.create')
@include('backend.experiences.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
