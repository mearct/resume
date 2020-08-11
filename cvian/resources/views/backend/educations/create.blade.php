<!-- Add Educations Modal -->
<div id="add_educations" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Educations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/educations/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Year of Gratudate <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" placeholder="Year of Gratudate" name="educations_date" value="{{ old('educations_date')}}">
                                <p class="text-danger">{{ $errors->first('educations_date') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Course <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Course" name="educations_course" value="{{ old('educations_course') }}">
                                <p class="text-danger">{{ $errors->first('educations_course') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Schools <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Schools" name="educations_school" value="{{ old('educations_school') }}">
                                <p class="text-danger">{{ $errors->first('educations_school') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Image<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" name="educations_image">
                                <p class="text-danger">{{ $errors->first('educations_image') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea rows="8" cols="80" class="form-control" placeholder="Description" name="educations_description">{{ old('educations_description')}}</textarea>
                                <p class="text-danger">{{ $errors->first('educations_description') }}</p>
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
<!-- Add Educations Modal -->
