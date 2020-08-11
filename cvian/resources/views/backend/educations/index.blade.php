@extends('layouts.backend_layouts.app')
@section('title', 'Educations')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush

@section('add_button', 'Add Educations')
@section('data_target', 'add_educations')
@section('activate_button', 'Activate Educations')
@section('data_activate', 'activate_educations')

@section('content')

<div class="tab-content">
  <!-- Profile Info Tab -->
  <div id="emp_profile" class="pro-overview tab-pane fade show active">
    <div class="row">
      @foreach ($educations as $education)
      <div class="col-md-6 d-flex">
        <div class="card profile-box flex-fill">
          <div class="card-body">
            <h3 class="card-title"> {{ $education->date_education }}
              <a href="#" class="edit-icon" data-toggle="modal" data-target="#edit_educations{{ $education->id }}"><i class="fa fa-pencil"></i></a>
            </h3>
          <div class="">
            @if (empty($education->image_education))
            @else
            <img src="{{ asset('/uploads/'.$education->image_education) }}" width="10%">
            @endif
          </div>



            <h2>{{ $education->course_education }}</h2>
            <h4>{{ $education->school_education }}</h4>
            <div class="education-box">
              <ul class="education-list">
                <li>
                  <div class="education-user">
                    <div class="before-circle"></div>
                  </div>
                  <div class="education-content">
                    <div class="timeline-content">
                      <p>{{ $education->description_education }}</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <a href="#" class="delete-icon" data-toggle="modal" data-target="#deactivate_educations{{ $education->id }}"><i class="fa fa-trash"></i></a>
          </div>
        </div>
      </div>
      @include('backend.educations.update')
      @include('backend.educations.deactivate')
      @endforeach
    </div>
  </div>
  <!-- /Profile Info Tab -->
</div>

@include('backend.educations.create')
@include('backend.educations.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
