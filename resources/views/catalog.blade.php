@extends("layouts.app")

@section("content")
    <div class="catalog_wrapper">
        <div class="catalog-container">
            <div class="catalog-title">
                <div>
                    <h2>Catalog</h2>
                </div>
                <div class="relative">
                    <button class="filter">FIlter</button>
                    <div class="position-absolute filter_div">
                        <form action="{{route('filter')}}" method="post">
                            @csrf
                            <div class="m-3">
                                <h3>FILTER</h3>
                            </div>
                            <div class="m-3">
                                <div>
                                    <h5>Categories</h5>
                                </div>
                                <div>
                                    @foreach($categories as $index => $category)
                                        <div class="mx-3">
                                            <input value="{{$category->id}}" name={{"categories".$index}} type="checkbox">
                                            <span>{{$category->categoryName}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="filter_divs m-3 p-3">
                                <div>
                                    <input value="asc" type="radio" name="sort_price">
                                    <span>Price in ascending</span>
                                </div>
                                <div>
                                    <input value="desc" type="radio" name="sort_price">
                                    <span>Price in descending</span>
                                </div>
                            </div>
                            <div class="m-3">
                                <div>
                                    <span>Price in </span><input class="price_input" type="number" min="0">
                                </div>
                                <div class="mt-2">
                                    <span>Price to </span><input class="price_input" type="number" min="0">
                                </div>
                            </div>
                            <div class="mx-auto my-2 w-25">
                                <button class="w-100 border-0 p-2 go-button" type="submit">GO</button>
                            </div>
                        </form>
                    </div>
                </div>
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

    <script>
        $('.filter').on('click', function () {
            $('.filter_div').slideToggle('slow')
        });
    </script>
@endsection
