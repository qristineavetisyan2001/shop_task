<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>

<div class="orders-page-wrapper">
    <div class="orders-page-container">
        <div class="orders-page-title">Orders</div>
        <div class="orders-page-info">

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
                    <img src="https://img.tamindir.com/2023/06/476726/iphone-15-pro-max-sessize-alma-tusu.jpg" alt="">
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

</body>
</html>
