<!-- Delete Portfolio Types Modal -->
<div class="modal custom-modal fade" id="deactivate_service-types{{ $servicetype->id }}" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Portfolio Types</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ url('dashboard/services-types/deactivate', $servicetype->id ) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary submit-btn">Delete</button>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Portfolio Types Modal -->
