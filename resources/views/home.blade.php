{{--
@extends("layouts.app")

@section("content")

    --}}
{{--    slider--}}{{--

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($cheapProducts as $index => $cheapProduct)
                    <div class="carousel-item {{$index==0?'active':''}} slider_container">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center bg-dark">
                            <div class="sale_product_info">
                                <a href="{{ route("content", $cheapProduct->id) }}">
                                    <h2 class="text-light display-2">{{$cheapProduct->productName}}</h2>
                                </a>
                                <div>
                                    <span class="text-light display-4">{{$cheapProduct->productPrice}} $</span>
                                </div>
                            </div>
                            <div class="sale_product_image">
                                <a href="{{ route("content", $cheapProduct->id) }}">
                                    <img class="slider_item_image" src="{{asset("uploads/content/". $cheapProduct->images[0]->productImage)}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="new-products-wrapper">
        <div class="new-products-title">New Products</div>
        <div class="new-products-container">
            @foreach($newProducts as $index => $newProduct)
                    <div class="new-product">
                        <div class="new-product-image">
                            <a href="{{ route("content", $newProduct->id) }}">
                                <img src="{{asset("uploads/content/". $newProduct->images[0]->productImage)}}" alt="">
                            </a>
                        </div>
                        <div class="new-product-info">
                            <a href="{{ route("content", $newProduct->id) }}">
                                <h4>{{$newProduct->productName}}</h4>
                            </a>
                            <div>
                                <span>{{$newProduct->productPrice}} $</span>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>


    <div class="swiper sample-slider">
        <div class="new-products-title mt-5">Top Products</div>
        <div class="swiper-wrapper mt-3">
            @foreach($allProducts as $index => $allProduct)
               <div class="swiper-slide">
                   <a href="{{ route("content", $allProduct->id) }}">
                       <img src="{{asset("uploads/content/". $allProduct->images[0]->productImage)}}">
                   </a>
               </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev arrow"></div>
        <div class="swiper-button-next arrow"></div>
    </div>
@endsection
--}}


@extends("layouts.app")

@section("content")
    <link rel="stylesheet" href="{{asset("css/home_slider_style.css")}}">

    <div class="home_slider_container">
        <div class="stage a">
            <div class="containeraaa a">
                <div class="ring a">
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                    <div class="img a"></div>
                </div>
            </div>
            <h2 class="slide_text" id="slide_text"></h2>
        </div>
    </div>

    <div class="new-products-wrapper">
        <div class="new-products-container">
            <div class="new-products-title">New Products</div>
            <div class="new-products">
                @foreach($newProducts as $index => $newProduct)
                    <div class="new-product">
                        <div class="new-product-image">
                            <a href="{{ route("content", $newProduct->id) }}">
                                <img src="{{asset("uploads/content/". $newProduct->images[0]->productImage)}}" alt="">
                            </a>
                        </div>
                        <div class="new-product-info">
                            <a href="{{ route("content", $newProduct->id) }}">
                                <h4>{{$newProduct->productName}}</h4>
                            </a>
                            <div>
                                <span class="new-product-info-price">{{$newProduct->productPrice}} $</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="fixed_home_image">

    </div>

    <div class="swiper swiper_z_index sample-slider">
        <div class="new-products-title mt-5">Top Products</div>
        <div class="swiper-wrapper swiper_wr mt-3">
            @foreach($allProducts as $index => $allProduct)
                <div class="swiper-slide">
                    <a href="{{ route("content", $allProduct->id) }}">
                        <img class="w-100" src="{{asset("uploads/content/". $allProduct->images[0]->productImage)}}">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev arrow"></div>
        <div class="swiper-button-next arrow"></div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>



    <script>

        let bgImages = [];
        let slideTexts = [];

        @foreach($categories as $category)
            bgImages.push('{{$category->categoryImage}}')
            slideTexts.push('{{$category->categoryName}}')
        @endforeach



        let xPos = 0;


        gsap.timeline()
            .set('.ring', {
                rotationY: 180,
                cursor: 'grab'
            }) // set initial rotationY so the parallax jump happens off-screen
            .set('.img', { // apply transform rotations to each image
                rotateY: (i) => i * -36,
                transformOrigin: '50% 50% 500px',
                z: -500,
                backgroundImage: (i) => {
                    return `url({{asset("uploads/categories")}}/${bgImages[i]})`
                },
                backgroundPosition: (i) => getBgPos(i),
                backfaceVisibility: 'hidden'
            })
            .from('.img', {
                duration: 1.5,
                y: 200,
                opacity: 0,
                stagger: 0.1,
                ease: 'expo'
            })
            .add(() => {
                document.querySelectorAll('.img').forEach((img, index) => {
                    img.addEventListener('mouseenter', (e) => {
                        let current = e.currentTarget;
                        gsap.to('.img', {
                                opacity: (i, t) => (t == current) ? 1 : 0.5, ease: 'power3',
                                // width: (i, t) => (t == current) ? '500px' : '',
                                // padding: (i, t) => (t == current) ? '70px' : '',
                                zIndex: (i, t) => (t == current) ? 10 : 0
                            },
                        )
                        document.getElementById('slide_text').innerText = slideTexts[index];
                    });
                    img.addEventListener('mouseleave', (e) => {
                        gsap.to('.img', {opacity: 1, ease: 'power2.inOut'})
                        document.getElementById('slide_text').innerText = '';
                    });
                });
            }, '-=0.5');
        document.addEventListener('mousedown', dragStart);
        document.addEventListener('touchstart', dragStart);

        function dragStart(e) {
            if (e.touches) e.clientX = e.touches[0].clientX;
            xPos = Math.round(e.clientX);
            gsap.set('.ring', {cursor: 'grabbing'});
            document.addEventListener('mousemove', drag);
            document.addEventListener('touchmove', drag);
        }

        function drag(e) {
            if (e.touches) e.clientX = e.touches[0].clientX;
            gsap.to('.ring', {
                rotationY: '-=' + ((Math.round(e.clientX) - xPos) % 360),
                onUpdate: () => {
                    gsap.set('.img', {backgroundPosition: (i) => getBgPos(i)})
                }
            });
            xPos = Math.round(e.clientX);
        }

        document.addEventListener('mouseup', dragEnd);
        document.addEventListener('touchend', dragEnd);

        function dragEnd(e) {
            document.removeEventListener('mousemove', drag);
            document.removeEventListener('touchmove', drag);
            gsap.set('.ring', {cursor: 'grab'});
        }

        function getBgPos(i) { //returns the background-position string to create parallax movement in each image
            return (100 - gsap.utils.wrap(0, 360, gsap.getProperty('.ring', 'rotationY') - 180 - i * 36) / 360 * 500) + 'px 0px';
        }
    </script>

@endsection
