@extends('layouts.backend_layouts.app')
@section('title', 'Services')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush

@section('add_button', 'Add Services')
@section('data_target', 'add_services')
@section('activate_button', 'Activate Services')
@section('data_activate', 'activate_services')

@section('content')

<div class="tab-content">
    <!-- Profile Info Tab -->
    <div id="emp_profile" class="pro-overview tab-pane fade show active">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $service->services_name }}
                            <a href="#" class="edit-icon" data-toggle="modal" data-target="#edit_services{{ $service->id }}"><i class="fa fa-pencil"></i></a>
                        </h3>
                        <div class="experience-box">
                            <ul class="experience-list">
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                          <p>

                                          </p>

                                            <p>{{ $service->services_description }}</p>
                                            <div>{{ $service->services_percentages }}</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="delete-icon" data-toggle="modal" data-target="#deactivate_services{{ $service->id }}"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
            @include('backend.services.update')
            @include('backend.services.deactivate')
            @endforeach
        </div>

    </div>
    <!-- /Profile Info Tab -->
</div>

@include('backend.services.create')
@include('backend.services.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
