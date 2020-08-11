<!-- Add Skills Modal -->
<div id="add_skills" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Skills</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/skills/store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Skills <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Skill" name="name_skill" value="{{ old('name_skill')}}">
                                <p class="text-danger">{{ $errors->first('name_skill') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Percentage</label>
                                <input class="form-control" type="number" placeholder="skill Percentage" name="percentages_skill" value="{{ old('percentages_skill')}}">
                                <p class="text-danger">{{ $errors->first('percentages_skill') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea rows="8" cols="80" class="form-control" placeholder="Description" name="description_skill">{{ old('description_skill')}}</textarea>
                                <p class="text-danger">{{ $errors->first('description_skill') }}</p>
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
<!-- /Add Skills Modal -->
