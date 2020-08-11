<!-- Add Services Modal -->
<div id="add_services" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/services/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Services <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Services Name" name="services_name" value="{{ old('services_name')}}">
                                <p class="text-danger">{{ $errors->first('services_name') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                          <label class="col-form-label">Services Icons<span class="text-danger">*</span></label>
                            <select  type="file" class="form-control" name="services_typeid" id="services_typeid" value="{{ old('services_typeid')}}">
                                <option>-- Select --</option>
                                @foreach ($servicetypes as $servicetype)
                                <option value="{{ $servicetype->id }}" >{{ $servicetype->servicetypename }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea rows="8" cols="80" class="form-control" placeholder="Description" name="services_description">{{ old('services_description')}}</textarea>
                                <p class="text-danger">{{ $errors->first('services_description') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Services Modal -->
