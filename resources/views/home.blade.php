@extends("layouts.app")

@section("content")

    {{--    slider--}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active slider_container">
                <div class="w-100 h-100 d-flex justify-content-center align-items-center bg-dark">
                    <div class="sale_product_info">
                        <div>
                            <h2 class="text-light display-2">T-shirt</h2>
                        </div>
                        <div>
                            <span class="text-light display-4">100 $</span>
                        </div>
                    </div>
                    <div class="sale_product_image">
                        <img class="slider_item_image"
                             src="https://static.vecteezy.com/system/resources/previews/008/520/862/original/black-oversize-t-shirt-mockup-hanging-file-png.png"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item  slider_container">
                <div class="d-block w-100 h-100 bg-secondary"></div>
            </div>
            <div class="carousel-item  slider_container">
                <div class="d-block w-100 h-100 bg-danger"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="new-products-wrapper">
        <div class="new-products-title">New Products</div>
        <div class="new-products-container">
            @include("inc.productCard")
            @include("inc.productCard")
            @include("inc.productCard")
        </div>
    </div>


    <div class="swiper sample-slider">
        <div class="new-products-title mt-5">Top Products</div>
        <div class="swiper-wrapper mt-3">
            @include('inc.productCardSlider')
            @include('inc.productCardSlider')
            @include('inc.productCardSlider')
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev arrow"></div>
        <div class="swiper-button-next arrow"></div>
    </div>
@endsection
