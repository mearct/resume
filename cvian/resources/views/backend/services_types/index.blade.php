@extends('layouts.backend_layouts.app')
@section('title', 'Services Types')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush

@section('add_button', 'Add Services Types')
@section('data_target', 'add_service-types')
@section('activate_button', 'Activate Services Types')
@section('data_activate', 'activate_service-types')

@section('content')



<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Striped Rows</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th >I.D. No.</th>
                            <th >Services Types</th>
                            <th >Image</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicetypes as $servicetype)
                        <tr>
                            <td>{{ $servicetype->id }}</td>
                            <td>{{ $servicetype->servicetypename }}</td>
                            <td>
                              @if (empty($servicetype->servicetypeiconimage))
                              @else
                              <img src="{{ asset('/uploads/'.$servicetype->servicetypeiconimage) }}" width="5%">
                              @endif

                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit_service-types{{ $servicetype->id }}"><i class="la la-edit"></i> Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deactivate_service-types{{ $servicetype->id }}"> <i class="la la-eraser"></i> Delete</button>
                            </td>
                        </tr>
                        @include('backend.services_types.update')
                        @include('backend.services_types.deactivate')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@include('backend.services_types.create')
@include('backend.services_types.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
