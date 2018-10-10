@extends('layouts.app_auth')

@section('title', config('app.name').' | WishList')

@section('content')
<section id="wishlist-table" class="mt-3">
	<div class="container">
		<h3 class="text-muted">Wishlist <i class="fa fa-heart text-danger"></i></h3>
		<table class="table">
			<thead>
				<tr>
					<th width="70%">Product</th>
					<th>Price</th>
					<th width="20%" class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach(range(1, 2) as $i)
				<tr>
					<td>
						<a href="/product/{{ $i }}/details" class="text-muted">
							<div class="clearfix">
								<div style="width: 200px;" class="float-left">
									<img class="img-fluid" src="https://picsum.photos/600/400/?image=0" alt="Product">
								</div>
								<div style="width: calc(100% - 200px)" class="float-left p-2">
									<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, placeat?</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quo quaerat, quod sequi ut laborum voluptatem soluta doloremque nulla itaque?
									</p>
								</div>
							</div>
						</a>
					</td>
					<td>
						Rs. 5000 <br> <br>
						<span class="text-orangered">Dashain Offer <i class="fa fa-gift blink"></i></span>
					</td>
					<td class="text-center">
						<a href="javascript:void(0)" class="btn btn-secondary btn-sm px-3"
						title="Add this product to your cart">
							<i  class="fa fa-shopping-cart"></i>&nbsp; Add To Cart
						</a> 
						<br>
						<a href="/product/22/details" class="btn btn-primary btn-sm px-2 mt-2"
						title="Go to details page of this product">
							<i class="fa fa-eye"></i>
						</a>
						<a href="javascript:void(0)" class="btn btn-danger btn-sm mt-2 ml-1"
						title="Remove this item from your WishList">
							<i class="fa fa-times"></i>&nbsp; Remove
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<hr class="stylish-hr mb-5">
	</div>
</section>
@endsection