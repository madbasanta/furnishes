<section id="slider" class="py-3 bg-banner">
    <div class="container">
        <div id="productSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators d-none">
            @foreach(range(0, 2) as $i)
                <li data-target="#productSlider" data-slide-to="{{ $i }}" class="{{ $i ?:'active' }}"></li>
            @endforeach
          </ol>
          <div class="carousel-inner">
            @foreach(range(0, 2) as $p)
            <div class="carousel-item {{ $p ?: 'active' }}">
                <div class="row">
                    @foreach(range(1, 4) as $i)
                    <div class="col-md-3">
                        <a href="javascript:void(0)" class="product">
                            <div class="card">
                                <div class="card-img">
                                    <img src="https://picsum.photos/330/300/?image=0" class="img-fluid" align="product">
                                </div>
                                <div class="card-img-overlay text-white blur-background">
                                    <div class="card-text">{{ str_limit('Name of the product', 35) }}</div>
                                    <small>{{ str_limit('This is Brand Name', 50) }}</small>
                                    <div class="pricing  mt-5">
                                        <strong class="text-info badge-light px-3 py-1">
                                            <span class="">$99.00</span> <span class="text-danger small">- $2</span>
                                        </strong> <br>
                                        <span class="text-orange small">10% off</span>
                                    </div>
                                    <div class="actions mt-3">
                                        <span class="btn btn-sm btn-outline-light">
                                            Buy Now
                                        </span>
                                        <span class="btn btn-sm btn-danger float-right" title="Add to WishLIst">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                        <span class="btn btn-sm btn-secondary mr-2 float-right" title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="offer">Offer</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
</section>