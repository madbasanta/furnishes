@extends('layouts.app_auth')

@section('title', config('app.name').' | Search')

@section('content')
<section id="advance-search" class="my-4">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div id="width-cather"></div>
				<div class="card p-3 text-muted fixedElement" id="advance-filters">
					<h4 class="">Advance Filters</h4>
					<div class="form-group input-group">
						<input type="text" placeholder="Search Term" class="form-control form-control-sm outline-none">
						<div class="input-group-append">
							<span class="input-group-text cursor">
								<i class="fa fa-search text-muted"></i>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label>Categories</label>
						<div>
							@foreach(range(1, 4) as $i)
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="cat{{ $i }}">
								  <label class="custom-control-label fa-sm" for="cat{{ $i }}">
									Listed Category {{ $i }}
								  </label>
								</div>
							@endforeach
						</div>
					</div>
					<div class="form-group">
						<label>Price</label>
						<div class="clearfix">
							<input type="text" class="form-control outline-none form-control-sm float-left" style="width: 40%" placeholder="Min">
							<span class="float-left text-center pt-1" style="width: 20%;">
								<i class="fa fa-minus"></i>
							</span>
							<input type="text" class="form-control outline-none form-control-sm float-left" style="width: 40%" placeholder="Max">
						</div>
					</div>
					<div class="form-group">
						<label>Ratings</label>
						<div>
							@foreach(range(1, 5) as $r)
								<div class="custom-control custom-radio">
								    <input type="radio" class="custom-control-input" id="star{{ $r }}" name="rating">
								    <label class="custom-control-label" for="star{{ $r }}">
								    	@foreach(range(1, $r) as $i)
											<i class="fa fa-star text-orange"></i>
										@endforeach
								    </label>
								</div>
							@endforeach
						</div>
					</div>
					<button class="btn btn-success btn-sm outline-none">Search</button>
				</div>
			</div>
			<div class="col-md-9">
				<div class="mt-3">
					<h5>Search Results from "product name or something"</h5>
					<hr class="stylish-hr my-0">
				</div>
				<div class="row">
					@foreach(range(1, 20) as $i)
					    <div class="col-md-4">
					        <div class="card mt-3 border-primary">
					            <div class="card-img">
					                <img class="img-fluid" src="https://picsum.photos/300/250/?image=0" alt="watchlist">
					                <div class="custom-card-img-overlay">
					                    <label class="text-white">Ratings</label>
					                    <i class="fa fa-star text-warning"></i>
					                    <i class="fa fa-star text-warning"></i>
					                    <i class="fa fa-star text-warning"></i>
					                    <i class="fa fa-star text-warning"></i>
					                </div>
					            </div>
					            <div class="card-footer text-muted">
					                <div class="card-text" style="line-height: 1.3;">
					                    Lorem ipsum dolor sit amet, consectetur adipisicing 
					                </div>
					                <div class="actions mt-2">
					                    <a href="/product/11/details" class="btn btn-sm btn-outline-primary px-3">Buy Now</a>
					                    <span class="btn btn-sm btn-danger float-right" title="Add To WishList">
					                    	<i class="fa fa-heart"></i>
					                    </span>
					                    <span class="btn btn-sm btn-secondary float-right mr-2" title="Add To Cart">
					                        <i class="fa fa-shopping-cart"></i>
					                    </span>
					                </div>
					            </div>
					        </div>
					    </div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection