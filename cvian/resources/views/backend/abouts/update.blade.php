<!-- Edit About Modal -->
<div id="edit_about{{ $about->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/abouts/update', $about->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="First Name" name="update_first_name" value="{{ $about->name_first }}">
                                <p class="text-danger">{{ $errors->first('update_first_name') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Middle Name</label>
                                <input class="form-control" type="text" placeholder="Middle Name" name="update_middle_name" value="{{ $about->name_middle }}">
                                <p class="text-danger">{{ $errors->first('update_middle_name') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Last Name</label>
                                <input class="form-control" type="text" placeholder="Last Name" name="update_last_name" value="{{ $about->name_last }}">
                                <p class="text-danger">{{ $errors->first('update_last_name') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Job <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Job" name="update_position" value="{{ $about->designation }}">
                                <p class="text-danger">{{ $errors->first('update_position') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Phone No. <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Phone Number" name="update_num_phone" value="{{ $about->phone_num }}">
                                <p class="text-danger">{{ $errors->first('update_num_phone') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" type="email" placeholder="Email@email.com" name="update_email" value="{{ $about->email }}">
                                <p class="text-danger">{{ $errors->first('update_email') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <input class="form-control" type="file" name="update_file_img">
                                <p class="text-danger">{{ $errors->first('update_file_img') }}</p>
                            </div>
                        </div>

                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit About Modal -->
