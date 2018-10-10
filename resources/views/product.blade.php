@extends('layouts.app')

@section('title', 'Product 22')

@section('content')
<section id="product-details" class="mt-3">
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-6">
					<div>
						<img src="https://picsum.photos/600/400/?image=0" alt="product-details" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, numquam.</h3>
						<div class="ratings">
							<label class="text-muted">Ratings :</label> 
							<i class="fa fa-star text-orange"></i>
							<i class="fa fa-star text-orange"></i>
							<i class="fa fa-star text-orange"></i>
							<i class="fa fa-star text-orange"></i>
							<i class="fa fa-star text-orange"></i>
							| &nbsp;<a href="javascript:void(0)">4 Questions answered</a>&nbsp;
							| &nbsp;<a href="javascript:void(0)">9 Reviews</a>&nbsp;
						</div>
						<hr class="stylish-hr">
						<div class="pricing mt-4">
							<h4 class="text-orangered cursor">
								Rs. 50,000 &nbsp; 
								<small class="text-muted"><del>Rs. 55,000</del><small> &nbsp; 10% off</small></small>
								<span class="btn btn-sm btn-outline-orange px-3 stay ml-2">
									Dashain Offer <i class="fa fa-gift blink"></i>
								</span>
							</h4>
						</div>
						<div class="colors mt-3">
							<h5 class="text-muted">
								Colors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span class="btn btn-sm btn-primary ">&nbsp;&nbsp;&nbsp;</span>
								<span class="btn btn-sm bg-purple">&nbsp;&nbsp;&nbsp;</span>
								<span class="btn btn-sm btn-success">&nbsp;&nbsp;&nbsp;</span>
							</h5>
						</div>
						<div class="quantiry mt-3">
							<h5 class="text-muted">
								Quantity &nbsp;&nbsp;&nbsp; 
								<span class="btn btn-sm btn-light"><i class="fa fa-minus"></i></span>
								<input type="text" class="form-control form-control-sm d-inline outline-none text-center" id="product-quantity" value="1" style="width: 30px;">
								<span class="btn btn-sm btn-light"><i class="fa fa-plus"></i></span>
							</h5>
						</div>
						<div class="actions mt-4">
							<span class="btn btn-outline-primary px-5">Buy Now</span>
							<span class="btn btn-secondary ml-2">
								<i class="fa fa-shopping-cart"></i> Add To Cart
							</span>
							<span class="btn btn-danger ml-4" title="Add To WishList">
								<i class="fa fa-heart"></i>
							</span>
							<span class="btn">
								<i class="fa fa-info-circle text-muted fa-2x" title="Information"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="product-description" class="mt-3">
	<div class="container">
		<div class="jumbotron">
			<h4>Product Description</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatum, architecto modi doloremque quis fuga, assumenda consequatur sint neque amet repudiandae quasi enim velit fugit! Saepe quae sed commodi similique explicabo dolorem, suscipit non. Adipisci molestiae perspiciatis accusamus, sed in rerum vero, molestias maxime repellat perferendis ipsa, architecto? A repellat deleniti fugiat delectus modi, maxime aspernatur, ratione odit nisi tempore, nostrum quo, amet fuga enim omnis est minima sit voluptas accusamus officiis autem! Laborum, aperiam eum pariatur provident doloremque voluptate officiis blanditiis cum aspernatur, commodi, illum nisi? Aspernatur repellendus dignissimos debitis libero rerum doloremque dolores beatae incidunt laudantium. Quia, obcaecati.
			</p>
			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
				<li>Dolore iure ullam sunt corporis! Possimus, illum fuga!</li>
				<li>Dolor quis quasi possimus, a alias soluta, nihil.</li>
				<li>Repudiandae earum harum distinctio facere, amet culpa. Numquam?</li>
				<li>Provident in alias iusto perferendis neque dolorem, tenetur!</li>
				<li>Velit blanditiis, non voluptatem fugiat officiis mollitia expedita!</li>
				<li>Accusamus possimus at, veniam, doloribus ex maiores fuga!</li>
				<li>Saepe, odit in explicabo quam! Quam, voluptatem quidem?</li>
				<li>Sunt eligendi adipisci, optio atque sit laboriosam quis.</li>
				<li>Animi, tenetur iure quisquam cumque dicta quidem temporibus.</li>
			</ul>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ipsam maxime id doloremque. Consectetur facilis quas praesentium quis. Iste, eius? Debitis ratione reiciendis ab similique placeat asperiores, doloremque voluptatum at.
			</p>
		</div>
	</div>
</section>

@include('components.slider')
<div class="mt-2">&nbsp;</div>
@endsection