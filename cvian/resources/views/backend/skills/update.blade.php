<!-- Update Skills Modal -->
<div id="edit_skills{{ $skill->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Skills</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/skills/update', $skill->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Skills <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Skill" name="update_name_skill" value="{{ $skill->skill_name }}">
                                <p class="text-danger">{{ $errors->first('update_name_skill') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Percentage</label>
                                <input class="form-control" type="number" placeholder="skill Percentage" name="update_percentages_skill" value="{{ $skill->skill_percentages }}">
                                <p class="text-danger">{{ $errors->first('update_percentages_skill') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Description</label>
                                <textarea rows="8" cols="80" class="form-control" placeholder="Description" name="update_description_skill">{{ $skill->skill_description }}</textarea>
                                <p class="text-danger">{{ $errors->first('update_description_skill') }}</p>
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
<!-- Update Skills Modal -->
