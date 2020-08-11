<!-- Update Portfolio Types Modal -->
<div id="edit_service-types{{ $servicetype->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Service Image Types</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/services-types/update', $servicetype->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">

                      <div class="col-sm-6">
                          <div class="form-group">
                              <label class="col-form-label">Name Service Types <span class="text-danger">*</span></label>
                              <input class="form-control" type="text" placeholder="Name Service Types" name="update_name_servicetype" value="{{ $servicetype->servicetypename }}">
                              <p class="text-danger">{{ $errors->first('update_name_servicetype') }}</p>
                          </div>
                      </div>

                      <div class="col-sm-6">
                          <div class="form-group">
                              <label class="col-form-label">Icon Image <span class="text-danger">*</span></label>
                              <input class="form-control" type="file" placeholder="Icon Image" name="update_iconimage_servicetype" value="{{ $servicetype->servicetypeiconimage }}">
                              <p class="text-danger">{{ $errors->first('update_iconimage_servicetype') }}</p>
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
