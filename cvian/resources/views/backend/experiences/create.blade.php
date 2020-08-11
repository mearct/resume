<!-- Add Experiences Modal -->
<div id="add_experiences" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Experiences</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/experiences/store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Start Year of Work <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" placeholder="Experiences" name="date_start_experiences" value="{{ old('date_start_experiences')}}">
                                <p class="text-danger">{{ $errors->first('date_start_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">End Year of Work<span class="text-danger">*</span></label>
                                <input class="form-control" type="date" placeholder="End  Year of Work" name="date_end_experiences" value="{{ old('date_end_experiences') }}">
                                <p class="text-danger">{{ $errors->first('date_end_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Designation <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Designation" name="designation_experiences" value="{{ old('designation_experiences') }}">
                                <p class="text-danger">{{ $errors->first('designation_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Company <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Company" name="company_experiences" value="{{ old('company_experiences') }}">
                                <p class="text-danger">{{ $errors->first('company_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea rows="8" cols="80" class="form-control" placeholder="Description" name="description_experiences">{{ old('description_experiences')}}</textarea>
                                <p class="text-danger">{{ $errors->first('description_experiences') }}</p>
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
<!-- Add Experiences Modal -->
