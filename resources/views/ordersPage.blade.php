@extends("layouts.app")

@section("content")
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .orders-page-wrapper{
            width: 100%;
            padding: 60px;
            border: 5px solid red;
        }

        .orders-page-container{
            border: 5px solid green;
            max-width: 1000px;
            margin: 0 auto;
        }

        .orders-page-title{
            border: 5px solid #9d13ff;
            font-size: 35px;
            padding: 10px;
        }

        .orders-page-info{
            border: 5px solid yellow;
            padding: 10px;
        }

        .order-container{
            border: 5px solid #0f6674;
            display: flex;
            padding: 10px;
            gap: 20px;
            cursor: pointer;
        }

        .order-container:hover .order-product-image img{
            width: 300px;
        }

        .order-product-image img{
            width: 120px;
            height: 120px;
            object-fit: cover;
            transition: 0.3s;
        }

        .order-info{
            flex-grow: 2;
        }

        .order-name{
            font-size: 35px;
        }

        .order-price{
            font-size: 40px;
            color: red;
        }

        .order-status{
            color: #2ca02c;
            font-size: 60px;
        }

    </style>


<div class="orders-page-wrapper">
    <div class="orders-page-container">
        <div class="orders-page-title">Orders</div>
        <div class="orders-page-info">

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/64e74ad803781abed13b0612/Apple--iPhone--iPhone-15--iPhone-15-Pro--iPhone-15-Pro-Max--iPhone-15-release--new/0x0.jpg?format=jpg&crop=1275,956,x113,y0,safe&width=960" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://m-cdn.phonearena.com/images/article/149546-wide-two_1200/All-new-iPhone-15-and-iPhone-15-Pro-Max-features.jpg" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://www.cnet.com/a/img/resize/81b8165fd683cba3aaa1f4560b9fe33c2d966bd2/hub/2022/12/16/eb02a6aa-f331-4fbe-9e5f-35efd2198f8d/p1002240-1.jpg?auto=webp&width=1200" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://mobile-review.com/all/wp-content/uploads/2023/04/iphone-15-pro-6.webp" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://s0.rbk.ru/v6_top_pics/media/img/1/62/346945445675621.webp" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://cdn1.smartprix.com/rx-iG9XGcrzY-w1200-h1200/G9XGcrzY.jpg" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://appleinsider.ru/wp-content/uploads/2023/07/iphone_15_pro_new_features_head-1280x720.jpg" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://www.91-cdn.com/hub/wp-content/uploads/2023/07/iPhone-15-series-1.jpg" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://img.tamindir.com/2023/06/476726/iphone-15-pro-max-sessize-alma-tusu.jpg" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

            <div class="order-container">
                <div class="order-product-image">
                    <img src="https://img.championat.com/c/1200x900/news/big/s/x/iphone-15-pro-budet-samym-lyogkim-ajfonom-so-vremyon-xs_1694193220541312419.jpg" alt="">
                </div>
                <div class="order-info">
                    <div class="order-date">22-09-2023</div>
                    <div class="order-name">Iphone 15</div>
                </div>
                <div class="order-price">1199$</div>
                <div class="order-status">✔</div>
            </div>

        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous">
</script>

<script>

</script>

@endsection
