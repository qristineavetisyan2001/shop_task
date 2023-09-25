@extends(("layouts.app"))

@section("content")

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .product-page-root {
            width: 100%;
            padding-top: 60px;
        }

        .product-page-wrapper {
        }

        .product-page-info-container {
            margin: 0 auto;
        }

        .product-page-images-container {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .main-image {
            width: 600px;
            height: 600px;
            position: relative;

        }

        .main-image img {
            width: 600px;
            height: 600px;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        .all-images {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .all-images-image {
            filter: brightness(70%);
            width: 100px;
            height: 100px;
            object-fit: cover;
            cursor: pointer;
            transition: 0.3s;
        }

        .all-images-image:hover {
            width: 110px;
        }

        .product-page-info {
            max-width: 800px;
            margin: 0 auto;
        }

        .product-page-info-title {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .product-page-info-description {
            font-size: 20px;
        }

        .product-page-info-price {
            font-size: 30px;
            color: #0c5460;
        }

        .active {
            filter: brightness(100%);
        }

        .zoom {
            width: 100px;
            height: 100px;
            position: absolute;
            border: 5px solid black;
            cursor: none
        }
    </style>

    <div class="product-page-root">

        <div class="product-page-wrapper">
            <div class="product-page-info-container">
                <div class="product-page-images-container">
                    <div class="main-image">
                        <div id="zoom"></div>
                    </div>
                    <div class="all-images">

                    </div>
                </div>
                <div class="product-page-info">
                    <div>
                        <h2 class="product-page-info-title">{{$product->productName}}</h2>
                    </div>
                    <div>
                    <span class="product-page-info-price">
                        {{$product->productPrice}}
                    </span>
                    </div>
                   @if(session('loggedUser'))
                        <div>
                            <form action="{{ route("addBasket", $product->id) }}" method="post">
                                @csrf
                                <i class="fa-solid fa-cart-shopping"></i>
                                <button>To Basket</button>
                            </form>
                        </div>
                   @endif
                    <div>
                        <p class="product-page-info-description">
                            {{$product->productDescription}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        console.log("{{'http://localhost:8000/content/'.$product->id}}");

        const productImages = [];

        @foreach($product->images as $image)
            productImages.push("{{asset("uploads/content/".$image->productImage)}}")
        @endforeach

        console.log(productImages);

        $(".main-image").append(`<img id="main-image" src="${productImages[0]}">`);
        const mainImage = $("#main-image")

        productImages.forEach(image => {
            let newImageElement = `<img class="all-images-image" src="${image}">`;
            $(".all-images").append(newImageElement);
        })

        const images = $(".all-images img").toArray();
        $(images[0]).addClass("active");

        function setMainImage(image, element) {
            mainImage.attr("src", image);
            images.map(image => $(image).removeClass("active"));
            $(element).addClass("active");
            console.log(element);
        }

        images.forEach((image, index) => {
            $(image).on("click", () => {
                setMainImage(productImages[index], image);
            })
        })

        let currentMousePos = {x: -1, y: -1};

        $(".main-image").on("mousemove", (e) => {

            $("#zoom").addClass("zoom");


            $(document).mousemove(function (event) {
                currentMousePos.x = event.pageX;
                currentMousePos.y = event.pageY;
            });


            $("#zoom").css("left", e.clientX - 670);
            $("#zoom").css("top", e.clientY - 100);
            console.log(currentMousePos);
            $("#zoom").css("background-image", `url(${mainImage.attr("src")})`);
            $("#zoom").css("background-size", `700px 700px`);
            $("#zoom").css("background-repeat", `no-repeat`);
            $("#zoom").css("background-position", `-${e.clientX - 610}px -${e.clientY - 50}px `);

            //${e.clientX}px ${e.vclientY}px

        })

        $(".main-image").on("mouseleave", () => {
            $("#zoom").removeClass("zoom");
        })

    </script>

@endsection
