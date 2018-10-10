@extends('layouts.app')

@section('title', config('app.name').' | Home')

@section('content')

@include('components.dark-section')

<section id="recently-visited" class="mb-5">
    <div class="container">
        <h3>Recently Visited <i class="fa fa-clock text-purple"></i></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatem libero, delectus unde tempora dolorum.</p>
        <div class="row">
            @foreach(range(1, 4) as $i)
                <div class="col-md-3">
                    <div class="card mt-3 border-primary">
                        <div class="card-img">
                            <img class="img-fluid" src="https://picsum.photos/300/300/?image=0" alt="watchlist">
                            <div class="custom-card-img-overlay">
                                <label class="text-white">Ratings</label>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-text">
                                <strong>Product tile and Lorem ipsum dolor Lipasdf.</strong>
                            </div>
                            <div class="actions mt-2">
                                <span class="btn btn-sm btn-outline-primary px-3">Buy Now</span>
                                <span class="btn btn-sm btn-secondary float-right">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="watchlist" class="mb-5">
    <div class="container">
        <hr class="mb-5 stylish-hr">
        <h3>WatchList <i class="fa fa-heart text-danger"></i></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatem libero, delectus unde tempora dolorum.</p>
        <div class="row">
            @foreach(range(1, 8) as $i)
                <div class="col-md-3">
                    <div class="card mt-3 border-primary">
                        <div class="card-img">
                            <img class="img-fluid" src="https://picsum.photos/300/300/?image=0" alt="watchlist">
                            <div class="custom-card-img-overlay">
                                <label class="text-white">Ratings</label>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-text">
                                <strong>Product tile and Lorem ipsum dolor Lipasdf.</strong>
                            </div>
                            <div class="actions mt-2">
                                <span class="btn btn-sm btn-outline-primary px-3">Buy Now</span>
                                <span class="btn btn-sm btn-secondary float-right">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
