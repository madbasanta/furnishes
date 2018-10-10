<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-danger">
      <h5 class="modal-title">DELETE - PRODUCT</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="/products/{{ $product }}/delete" class="d-block" id="product-add">
        <strong class="h6"><i class="fa fa-info-circle fa-lg"></i> Are you sure you want to delete this product ?</strong>
      </form>
    </div>
    <div class="modal-footer pr-3">
      <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">
        <i class="fa fa-times"></i>&nbsp; No
      </button>
      <button type="submit" class="btn btn-danger px-3 btn-sm outline-none"
      onclick="$('#product-add').submit()"><i class="fa fa-check"></i>&nbsp; Yes</button>
    </div>
  </div>
</div>