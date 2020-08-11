@extends('layouts.backend_layouts.app')
@section('title', 'Skills')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush

@section('add_button', 'Add Skills')
@section('data_target', 'add_skills')
@section('activate_button', 'Activate Skill')
@section('data_activate', 'activate_skill')


@section('content')

<div class="tab-content">

    <!-- Profile Info Tab -->
    <div id="emp_profile" class="pro-overview tab-pane fade show active">
        <div class="row">
            @foreach ($skills as $skill)
            <div class="col-md-6 d-flex">
                <div class="card profile-box flex-fill">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $skill->skill_name }}
                            <a href="#" class="edit-icon" data-toggle="modal" data-target="#edit_skills{{ $skill->id }}"><i class="fa fa-pencil"></i></a>
                        </h3>
                        <div class="experience-box">
                            <ul class="experience-list">
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <p>{{ $skill->skill_description }}</p>
                                            <div>{{ $skill->skill_percentages }}</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="delete-icon" data-toggle="modal" data-target="#deactivate_skills{{ $skill->id }}"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
            @include('backend.skills.update')
            @include('backend.skills.deactivate')
            @endforeach
        </div>
    </div>
    <!-- /Profile Info Tab -->
</div>

@include('backend.skills.create')
@include('backend.skills.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
