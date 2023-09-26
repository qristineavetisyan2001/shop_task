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
            @foreach($cheapProducts as $index => $cheapProduct)
                    <div class="carousel-item {{$index==0?'active':''}} slider_container">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center bg-dark">
                            <div class="sale_product_info">
                                <a href="{{ route("content", $cheapProduct->id) }}">
                                    <h2 class="text-light display-2">{{$cheapProduct->productName}}</h2>
                                </a>
                                <div>
                                    <span class="text-light display-4">{{$cheapProduct->productPrice}} $</span>
                                </div>
                            </div>
                            <div class="sale_product_image">
                                <a href="{{ route("content", $cheapProduct->id) }}">
                                    <img class="slider_item_image" src="{{asset("uploads/content/". $cheapProduct->images[0]->productImage)}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
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
            @foreach($newProducts as $index => $newProduct)
                    <div class="new-product">
                        <div class="new-product-image">
                            <a href="{{ route("content", $newProduct->id) }}">
                                <img src="{{asset("uploads/content/". $newProduct->images[0]->productImage)}}" alt="">
                            </a>
                        </div>
                        <div class="new-product-info">
                            <a href="{{ route("content", $newProduct->id) }}">
                                <h4>{{$newProduct->productName}}</h4>
                            </a>
                            <div>
                                <span>{{$newProduct->productPrice}} $</span>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>


    <div class="swiper sample-slider">
        <div class="new-products-title mt-5">Top Products</div>
        <div class="swiper-wrapper mt-3">
            @foreach($allProducts as $index => $allProduct)
               <div class="swiper-slide">
                   <a href="{{ route("content", $allProduct->id) }}">
                       <img src="{{asset("uploads/content/". $allProduct->images[0]->productImage)}}">
                   </a>
               </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev arrow"></div>
        <div class="swiper-button-next arrow"></div>
    </div>
@endsection
