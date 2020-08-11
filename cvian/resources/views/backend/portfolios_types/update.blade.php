<!-- Update Portfolio Types Modal -->
<div id="edit_portfolio-types{{ $portfoliotype->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Portfolio Types</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/portfolio-types/update', ['portfoliotype' => $portfoliotype]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label class="col-form-label">Portfolio Types <span class="text-danger">*</span></label>
                              <input class="form-control" type="text" placeholder="Portfolio Types" name="name_types" value="{{ $portfoliotype->name_types }}">
                              <p class="text-danger">{{ $errors->first('name_types') }}</p>
                          </div>
                      </div>

                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary btn-sm submit-btn"><i class="la la-save"></i>  Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Update Portfolio Types Modal -->
