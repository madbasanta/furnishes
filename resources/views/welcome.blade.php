@extends('layouts.app')

@section('title', config('app.name', "'Laravel'").' | Shop')

@section('content')

@include('components.slider')

<section id="intro" class="mt-3">
    <div class="container">
        @foreach(range(1, 2) as $i)
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-6">
                    <h3>This is title of the product</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quae ut ipsum beatae ullam vitae temporibus optio. Ipsam, amet, eum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quis, delectus. Ducimus dolorem nemo inventore excepturi delectus autem, blanditiis, quibusdam et, corporis sed eum cum similique, esse architecto quia itaque!
                    </p>
                    <div class="ratings mt-4">
                        <label>Ratings :</label> <br>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        ( Good product based on reviews )
                    </div>
                    <div class="actions mt-3">
                        <span class="btn px-3 btn-sm btn-outline-primary">
                            Buy Now
                        </span>
                        <span class="btn btn-sm btn-secondary ml-5" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i> Add To Cart
                        </span>
                        <span class="btn btn-sm btn-danger ml-1" title="Add to WishList">
                            <i class="fa fa-heart"></i> Add To WishList
                        </span>
                        <span class="btn btn-sm ml-2" title="Information">
                            <i class="fa fa-info-circle fa-2x text-purple"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                  <div>
                      <img src="https://picsum.photos/500/330/?image=0" alt="laptop" class="img-fluid">
                  </div>  
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-6">
                  <div>
                      <img src="https://picsum.photos/500/330/?image=0" alt="laptop" class="img-fluid">
                  </div>  
                </div>
                <div class="col-md-6">
                    <h3>This is title of the product</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quae ut ipsum beatae ullam vitae temporibus optio. Ipsam, amet, eum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quis, delectus. Ducimus dolorem nemo inventore excepturi delectus autem, blanditiis, quibusdam et, corporis sed eum cum similique, esse architecto quia itaque!
                    </p>
                    <div class="ratings mt-4">
                        <label>Ratings :</label> <br>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        <i class="fa fa-star text-orange"></i>
                        ( Good product based on reviews )
                    </div>
                    <div class="actions mt-3">
                        <span class="btn px-3 btn-sm btn-outline-primary">
                            Buy Now
                        </span>
                        <span class="btn btn-sm btn-secondary ml-5" title="Add to Cart">
                            <i class="fa fa-shopping-cart"></i> Add To Cart
                        </span>
                        <span class="btn btn-sm btn-danger ml-1" title="Add to WishList">
                            <i class="fa fa-heart"></i> Add To WishList
                        </span>
                        <span class="btn btn-sm ml-2" title="Information">
                            <i class="fa fa-info-circle fa-2x text-purple"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@include('components.dark-section')

@endsection

@section('scripts')
@if(session('admin'))
<script>
    $(document).ready(function() {
        $('#adminRequestModal').modal({closable: false, show: true});
    });
</script>
<?php session()->forget('admin'); ?>
@endif
@endsection