<!-- Add Portfolios Modal -->
<div id="activate_portfolios" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Activate Portfolios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfoliosActivates as $key => $portfoliosActivate)
                            <tr>
                                <td>{{ $portfoliosActivate->id }}</td>
                                <td>{{ $portfoliosActivate->name_portfolio.' '.$portfoliosActivate->types_portfolio }}</td>
                                <td>
                                    <form action="{{ url('dashboard/portfolios/activate', $portfoliosActivate->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-primary btn-sm submit-btn">Activate</button>
                                </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="submit-section">
                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /Add Portfolios Modal -->
