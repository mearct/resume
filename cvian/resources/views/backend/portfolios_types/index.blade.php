@extends('layouts.backend_layouts.app')
@section('title', 'Portfolio Types')

@push('css')
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush

@section('add_button', 'Add Portfolio Types')
@section('data_target', 'add_portfolio-types')
@section('activate_button', 'Activate Portfolio Types')
@section('data_activate', 'activate_portfolio-types')

@section('content')




<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Striped Rows</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>I.D. No.</th>
                            <th>Portfolio Types</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfoliotypes as $portfoliotype)
                        <tr>
                            <td>{{ $portfoliotype->id }}</td>
                            <td>{{ $portfoliotype->name_types }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit_portfolio-types{{ $portfoliotype->id }}"><i class="la la-edit"></i> Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deactivate_portfolio-types{{ $portfoliotype->id }}"> <i class="la la-eraser"></i> Delete</button>
                            </td>
                        </tr>
                        @include('backend.portfolios_types.update')
                        @include('backend.portfolios_types.deactivate')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@include('backend.portfolios_types.create')
@include('backend.portfolios_types.activate')

@endsection

@push('js')
<!-- Tagsinput JS -->
<script src="{{ asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
@endpush
