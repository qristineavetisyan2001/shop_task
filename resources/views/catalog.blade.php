@extends("layouts.app")

@section("content")
    <div class="catalog_wrapper">
        <div class="catalog-container">
            <div class="catalog-title">
                <h2>Catalog</h2>
            </div>
            <div class="catalog-products">

                @foreach($products as $product)
                    <div class="new-product">
                        <div class="new-product-image">
                            <a href="{{ route("content", $product->id) }}">
                                @foreach($product->images as $index => $image)
                                    @if($index==0)
                                        <img src="{{asset("uploads/content/".$image->productImage)}}" alt="">
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        <div class="new-product-info">
                            <div>
                                <h4>{{$product['productName']}}</h4>
                            </div>
                            <div>
                                <span>{{$product['productPrice']}} $</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
