<!-- Update Educations Modal -->
<div id="edit_educations{{ $education->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Educations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/educations/update', $education->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Year of Gratudate <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" placeholder="Educations" name="update_educations_date" value="{{ $education->date_education }}">
                                <p class="text-danger">{{ $errors->first('update_educations_date') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Course<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Course" name="update_educations_course" value="{{ $education->course_education }}">
                                <p class="text-danger">{{ $errors->first('update_educations_course') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Schools <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Schools" name="update_educations_school" value="{{ $education->school_education }}">
                                <p class="text-danger">{{ $errors->first('update_educations_school') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Image<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" placeholder="Image" name="update_educations_image" value="{{ old('update_educations_image')}}">
                                <p class="text-danger">{{ $errors->first('update_educations_image') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea rows="8" cols="80" class="form-control" placeholder="Description" name="update_educations_description">{{ $education->description_education }}</textarea>
                                <p class="text-danger">{{ $errors->first('update_educations_description') }}</p>
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
<!-- Update Educations Modal -->
