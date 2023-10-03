@extends("layouts.app")

@section("content")
    <style>

        .history-wrapper {
            width: 100%;
            padding: 100px;
            min-height: 500px;
        }

        .history-container {
            max-width: 1000px;
            margin: 0 auto;
            box-shadow: 0 0 10px #0c0e12;
            border-radius: 13px;
            min-height: 800px;
            padding: 20px;
        }

        .history-title {
            font-size: 40px;
            padding: 10px;
        }

        .history-products {
            padding: 10px;
        }

        .history-product {
            display: flex;
            padding: 10px;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .basket-product > :nth-child(2) {
            flex-grow: 2;
            text-align: center;
        }

        .history-product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .history-product-info {
            font-size: 35px;
        }

    </style>
    <div class="history-wrapper">
        <div class="history-container">
            <div class="history-title">History</div>
            <div class="history-products">
                <div class="history-product">
                    <div>
                        PRODUCT IMAGE
                    </div>
                    <div>
                        PRODUCT NAME
                    </div>
                    <div>
                        SOLD PRODUCT COUNT
                    </div>
                    <div>
                        PRODUCT CREATED_AT
                    </div>
                    <div>
                        PRODUCT TOTAL PRICE
                    </div>
                </div>
                @foreach($soldProducts as $soldProduct)
                    <a href="{{ route("content", $soldProduct->id) }}">
                        <div class="history-product">
                            <div>
                                <img class="history-product-image" src="{{asset('uploads/content/'.$soldProduct->productImage)}}">
                            </div>
                            <div>
                                <h3 class="history-product-info">{{$soldProduct->productName}}</h3>
                            </div>
                            <div>
                                <h3 class="history-product-info">{{$soldProduct->soldProductCount}}</h3>
                            </div>
                            <div>
                                <h3 class="history-product-info">{{$soldProduct->created_at}}</h3>
                            </div>
                            <div>
                                <h3 class="history-product-info">{{$soldProduct->productPrice * $soldProduct->soldProductCount}}$</h3>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
