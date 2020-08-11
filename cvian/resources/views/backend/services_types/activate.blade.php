<!-- Activate Portfolio Types Modal -->
<div id="activate_service-types" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Activate Portfolio Types</h5>
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
                <th>Portfolio Types</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($servicetypesActivates as $key => $servicetypesActivate)
              <tr>
                <td>{{ $servicetypesActivate->id }}</td>
                <td>{{ $servicetypesActivate->servicetypename }}</td>
                <td>
                  <form action="{{ url('dashboard/services-types/activate', $servicetypesActivate->id) }}" method="post">
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
<!-- /Activate Portfolio Types Modal -->
