@extends("layouts.app")

@section("content")
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .basket-wrapper {
            width: 100%;
            border: 5px solid red;
            padding: 60px;
        }

        .basket-container {
            max-width: 1000px;
            margin: 0 auto;
            border: 5px solid #0c5460;
        }

        .basket-title {
            border: 5px solid #2ca02c;
            font-size: 40px;
            padding: 10px;
        }

        .basket-products {
            border: 5px solid #9d13ff;
            padding: 10px;
        }

        .basket-product {
            border: 5px solid #ffff00;
            display: flex;
            padding: 10px;
            margin-bottom: 10px;
            align-items: center;
        }

        .basket-product > :nth-child(even) {
            flex-grow: 2;
            padding: 10px;
        }

        .basket-product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .basket-product-info {
            font-size: 35px;
            border: 2px solid #9d13ff;
        }

        .basket-product-buy {
            width: 100px;
            height: 50px;
            cursor: pointer;
            background-color: rgba(157, 19, 255, 0.62);
            color: #FFFFFF;
            font-size: 25px;
            border: none;
        }
    </style>

<body>

<div class="basket-wrapper">
    <div class="basket-container">
        <div class="basket-title">Basket</div>
        <div class="basket-products">
            <div class="basket-product">
                <div>
                    <img src="https://i.ebayimg.com/images/g/QSUAAOSwy3BhJQsQ/s-l1200.webp" alt=""
                         class="basket-product-image">
                </div>
                <div>
                    <h3 class="basket-product-info">Product Name</h3>
                </div>
                <div>
                    <button class="basket-product-buy">BUY</button>
                </div>
            </div>
            <div class="basket-product">
                <div>
                    <img src="https://i.ebayimg.com/images/g/QSUAAOSwy3BhJQsQ/s-l1200.webp" alt=""
                         class="basket-product-image">
                </div>
                <div>
                    <h3 class="basket-product-info">Product Name</h3>
                </div>
                <div>
                    <button class="basket-product-buy">BUY</button>
                </div>
            </div>
            <div class="basket-product">
                <div>
                    <img src="https://i.ebayimg.com/images/g/QSUAAOSwy3BhJQsQ/s-l1200.webp" alt=""
                         class="basket-product-image">
                </div>
                <div>
                    <h3 class="basket-product-info">Product Name</h3>
                </div>
                <div>
                    <button class="basket-product-buy">BUY</button>
                </div>
            </div>
            <div class="basket-product">
                <div>
                    <img src="https://i.ebayimg.com/images/g/QSUAAOSwy3BhJQsQ/s-l1200.webp" alt=""
                         class="basket-product-image">
                </div>
                <div>
                    <h3 class="basket-product-info">Product Name</h3>
                </div>
                <div>
                    <button class="basket-product-buy">BUY</button>
                </div>
            </div>
            <div class="basket-product">
                <div>
                    <img src="https://i.ebayimg.com/images/g/QSUAAOSwy3BhJQsQ/s-l1200.webp" alt=""
                         class="basket-product-image">
                </div>
                <div>
                    <h3 class="basket-product-info">Product Name</h3>
                </div>
                <div>
                    <button class="basket-product-buy">BUY</button>
                </div>
            </div>

        </div>
    </div>
</div>


<script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous">
</script>

@endsection
