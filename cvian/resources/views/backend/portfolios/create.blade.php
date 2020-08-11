<!-- Add Portfolio Modal -->
<div id="add_portfolios" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard/portfolios/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Portfolio Name</label>
                                <input class="form-control" type="text" placeholder="Portfolio Name" name="portfolio_name" value="{{ old('portfolio_name')}}">
                                <p class="text-danger">{{ $errors->first('portfolio_name') }}</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                          <label class="col-form-label">Portfolio Type</label>
                            <select class="form-control" name="portfolio_types" id="portfolio_types" value="{{ old('portfolio_types')}}">
                                <option>-- Select --</option>
                                @foreach ($portfoliotypes as $portfoliotype)
                                <option value="{{ $portfoliotype->name_types }}">{{ $portfoliotype->name_types }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Image<span class="text-danger">*</span></label>
                                <input class="form-control" type="file" placeholder="First Name" name="portfolio_image" value="{{ old('portfolio_image')}}">
                                <p class="text-danger">{{ $errors->first('portfolio_image') }}</p>
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
<!-- /Add Portfolio Modal -->
