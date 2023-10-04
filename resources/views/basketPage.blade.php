@extends("layouts.app")

@section("content")
    <link rel="stylesheet" href="{{asset("css/basketPage_style.css")}}">
    <div class="basket-wrapper">
        <div class="basket-container">
            <div class="basket-title">Basket</div>
            <div class="basket-products">
                @foreach($basketProducts as $basketProduct)
                    <div class="basket-product">
                        <div>
                            <img class="basket-product-image"
                                 src="{{ asset('uploads/content/' . $basketProduct->images[0]->productImage) }}">
                        </div>
                        <div>
                            <a href="{{route('content', $basketProduct->id)}}">
                                <h3 class="basket-product-info">{{ $basketProduct-> productName }}</h3>
                            </a>
                        </div>
                        <div>
                            <h3 class="basket-product-info">{{ $basketProduct-> productPrice }}$</h3>
                        </div>
                            <div>
                                <a href="{{route("creditCardPage", $basketProduct->id)}}" class="p-3 basket-product-button buy">Buy</a>
                            </div>
                        <form action="{{ route("deleteBasketProduct", $basketProduct->id) }}">
                            @csrf
                            <div>
                                <button class="basket-product-button delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        function getTotoalPrice(e, id){
            $("#totalPrice").text('Total Price:' + e.target.value * $('#price'+id));
        }

        $("#datetime").on("keyup", (e)=>{
            if(e.target.value.length === 2){
                e.target.value += "/";
            }
        })
    </script>
@endsection

