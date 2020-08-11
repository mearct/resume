<!-- Update Experiences Modal -->
<div id="edit_experiences{{ $experience->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Experiences</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/experiences/update', $experience->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Start Year of Work <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" placeholder="Experiences" name="update_date_start_experiences" value="{{ $experience->experiences_date_start }}">
                                <p class="text-danger">{{ $errors->first('update_date_start_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">End Year of Work<span class="text-danger">*</span></label>
                                <input class="form-control" type="date" placeholder="End  Year of Work" name="update_date_end_experiences" value="{{ $experience->experiences_date_end }}">
                                <p class="text-danger">{{ $errors->first('update_date_end_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Designation <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Designation" name="update_designation_experiences" value="{{ $experience->experiences_designation }}">
                                <p class="text-danger">{{ $errors->first('update_designation_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Company <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Company" name="update_company_experiences" value="{{ $experience->experiences_company }}">
                                <p class="text-danger">{{ $errors->first('update_company_experiences') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea rows="8" cols="80" class="form-control" placeholder="Description" name="update_description_experiences">{{ $experience->experiences_description }}</textarea>
                                <p class="text-danger">{{ $errors->first('update_description_experiences') }}</p>
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
<!-- Update Experiences Modal -->
