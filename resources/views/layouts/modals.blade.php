<div class="modal fade" id="adminRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-success">
      <div class="modal-header p-2">
        <h5 class="modal-title" id="exampleModalLabel">
          {{ config('app.name') }} <i class="fa fa-bed text-primary"></i>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to visit dashboard ? 
      </div>
      <div class="modal-footer p-2">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
          <i class="fa fa-times"></i>&nbsp; No, Cancel
        </button>
        <a href="/dashboard" type="button" class="btn btn-sm btn-success">
          <i class="fa fa-check"></i>&nbsp; Yes
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">

</div>