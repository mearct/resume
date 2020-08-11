<!-- Add About Modal -->
<div id="add_about" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/abouts/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="First Name" name="first_name" value="{{ old('first_name')}}">
                                <p class="text-danger">{{ $errors->first('first_name') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Middle Name</label>
                                <input class="form-control" type="text" placeholder="Middle Name" name="middle_name" value="{{ old('middle_name')}}">
                                <p class="text-danger">{{ $errors->first('middle_name') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Last Name</label>
                                <input class="form-control" type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name')}}">
                                <p class="text-danger">{{ $errors->first('last_name') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Job <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Job" name="position" value="{{ old('position')}}">
                                <p class="text-danger">{{ $errors->first('position') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Phone No. <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Phone Number" name="num_phone" value="{{ old('num_phone')}}">
                                <p class="text-danger">{{ $errors->first('num_phone') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" type="email" placeholder="Email@email.com" name="email" value="{{ old('email')}}">
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <input class="form-control" type="file" name="file_img" value="{{ old('file_img')}}">
                                <p class="text-danger">{{ $errors->first('file_img') }}</p>
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
<!-- /Add About Modal -->
