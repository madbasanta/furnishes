<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Product Add</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="/products/store" class="d-block" id="product-add">
        <div class="row">
          <div class="col-md-6">
            <div class="field">
              <label for="name">Product Name</label>
              <input type="text" name="name" id="name" class="form-control form-control-sm"
              placeholder="e.g. Shofa">
              <small class="name-error">&nbsp;</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="field">
              <label for="price">Price</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <button class="form-control form-control-sm
                  rounded-0" type="button">Rs.</button>
                </div>
                <input type="text" name="price" id="price" class="form-control form-control-sm"
                placeholder="00.00">
              </div>
              <small class="price-error">&nbsp;</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="field">
              <label for="category_id">Category</label>
              <select type="text" name="category_id" id="category_id" class="form-control form-control-sm">
                <!--option value="">SELECT</option>
                <option value="1">Home</option>
                <option value="2">Kitchen</option-->
              </select>
              <small class="category_id-error">&nbsp;</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="field">
              <label for="files">Product Images</label>
              <input type="file" name="images[]" id="files" multiple class="form-control form-control-sm">
              <small class="images-note"><strong>Note : </strong> Upload images with white background.</small>
              <small class="file-error">&nbsp;</small>
            </div>
          </div>
          <div class="col-md-12">
            <div class="field">
              <label for="description">Description</label>
              <textarea name="description" id="description" rows="10" class="form-control summernote"></textarea>
              <small class="description-error">&nbsp;</small>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer pr-3">
      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary px-3 btn-sm outline-none"
      onclick="$('#product-add').submit()">Save</button>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
      $('.summernote').summernote({height: 230, placeholder: 'Write full description here...'});
      initSelect2({id: '#category_id', url: '/products/getCategories'});
  });
</script>