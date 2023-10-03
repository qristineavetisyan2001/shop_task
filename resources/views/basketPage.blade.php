@extends("layouts.app")

@section("content")
    <style>

        .basket-wrapper {
            width: 100%;
            padding: 100px;
            min-height: 500px;
        }

        .basket-container {
            max-width: 1000px;
            margin: 0 auto;
            box-shadow: 0 0 10px #0c0e12;
            border-radius: 13px;
            min-height: 800px;
            padding: 20px;
        }

        .basket-title {
            font-size: 40px;
            padding: 10px;
        }

        .basket-products {
            padding: 10px;
        }

        .basket-product {
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

        .basket-product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .basket-product-info {
            font-size: 35px;
        }

        .basket-product-button {
            width: 100px;
            height: 58px;
            cursor: pointer;
            color: #FFFFFF;
            font-size: 25px;
            border: none;
        }

        .buy{
            color: #000000;
            background-color: #fcb547;
            border-radius: 10px;
            font-weight: 700;
            transition: 0.3s;
        }
        .buy:hover{
            background-color: #ff9b00;
        }

        .delete{
            width: 20px;
            background-color: red;
            color: rgba(255, 255, 255, 0.7);
            border-radius: 0 10px 10px 0;
            transition: 0.3s;
        }

        .delete:hover{
            width: 100px;
            color: rgba(255, 255, 255, 1);
        }

    </style>

    <body>

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

