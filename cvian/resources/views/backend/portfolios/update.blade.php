<!-- Edit Portfolio Modal -->
<div id="edit_portfolios{{ $portfolio->id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/portfolios/update', $portfolio->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Portfolio Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Portfolio Name" name="update_portfolio_name" value="{{ $portfolio->name_portfolio }}">
                                <p class="text-danger">{{ $errors->first('update_portfolio_name') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Portfolio Types</label>
                                <input class="form-control" type="text" placeholder="Portfolio Types" name="update_portfolio_types" value="{{ $portfolio->types_portfolio }}">
                                <p class="text-danger">{{ $errors->first('update_portfolio_types') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <input class="form-control" type="file" name="update_portfolio_image">
                                <p class="text-danger">{{ $errors->first('update_portfolio_image') }}</p>
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
<!-- /Edit Portfolio Modal -->
