<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Products</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<button class="btn btn-sm btn-secondary px-3">
			Export&nbsp;&nbsp;<i class="fa fa-file-pdf"></i>
			</button>
		</div>
		<div>
			<button class="btn btn-sm btn-success px-3 outline-none _show-modal"
			ajax-url="/products/add">Add&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
		</div>
	</div>
</div>
<div class="table-controls mb-3">
	<div class="input-group float-left" style="width: 400px">
		<div class="input-group-prepend">
			<select name="search_col" class="form-control form-control-sm outline-none"
			style="border-bottom-right-radius: 0;border-top-right-radius: 0;">
				<option value="">FILTERS</option>
				<option value="name">Product Name</option>
				<option value="category">Category</option>
			</select>
		</div>
		<input type="text" class="form-control form-control-sm outline-none" placeholder="Search here..." style="width: 250px" id="products-search">
	</div>
	<div class="clearfix"></div>
</div>
<div class="table-container" id="products-table-container">

</div>