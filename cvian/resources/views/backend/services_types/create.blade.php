<!-- Add Name Service Types Modal -->
<div id="add_service-types" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Name Service Types</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/services-types/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Name Service Types <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Name Service Types" name="name_servicetype" value="{{ old('name_servicetype') }}">
                                <p class="text-danger">{{ $errors->first('name_servicetype') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <input class="form-control" type="file" name="iconimage_servicetype" value="{{ old('iconimage_servicetype')}}">
                                <p class="text-danger">{{ $errors->first('iconimage_servicetype') }}</p>
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
<!-- Add Name Service Types Modal -->
