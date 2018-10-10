<div class="table-responsive">
	
	<table class="table table-sm bg-white" id="products-table">
		<thead>
			<tr>
				<th width="70px">S.N.</th>
				<th width="50%">Product Name</th>
				<th width="200px">Category</th>
				<th width="100px">Price</th>
				<th width="100px" class="text-right">Actions</th>
			</tr>
		</thead>
		<tbody class="text-muted">
			@foreach($products as $i => $p)
			<tr>
				<td>{{ $i + 1 }}</td>
				<td>{{ $p->name }}</td>
				<td>{{ $p->category }}</td>
				<td>Rs. {{ $p->price }}</td>
				<td class="text-right">
					<span class="btn btn-sm btn-outline-success"><i class="fa fa-eye"></i></span>
					<span class="btn btn-sm btn-outline-secondary _show-modal"
					ajax-url="/products/edit/{{ $p->id }}/getEditModal"><i class="fa fa-edit"></i></span>
					<span class="btn btn-sm btn-outline-danger _show-modal"
					ajax-url="/products/{{ $p->id }}/deleteAlert"><i class="fa fa-times"></i></span>
				</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">
					<div class="mt-3 products-links">
						{!! $products->links() !!}
					</div>
				</td>
			</tr>
		</tfoot>
	</table>
</div>