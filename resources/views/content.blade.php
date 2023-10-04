@extends(("layouts.app"))

@section("content")
    <link rel="stylesheet" href="{{asset("css/content_style.css")}}">
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
                                @if(!count($inBasket))
                                    <button class="basket-button">To Basket</button>
                                @else
                                    <button disabled class="active-basket">Added</button>
                                @endif
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


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        console.log("{{'http://localhost:8000/content/'.$product->id}}");

        const productImages = [];

        console.log('{{$product->images}}');

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
