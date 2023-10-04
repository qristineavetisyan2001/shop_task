@extends("layouts.app")

@section("content")
    <link rel="stylesheet" href="{{asset("css/home_style.css")}}">
    <div class="home_slider_container">
        <div class="stage a">
            <div class="containeraaa a">
                <div class="ring a">
                    @foreach($categories as $category)
                        <div class="img a">
                            <a class="to-category-button" href="{{route('category', $category->id)}}" style="width: 100%; position: absolute; bottom: 0; display: block">{{$category->categoryName}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
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
    <div class="model-accessories-wrapper">
        <div class="model-accessories-container">
            <div class="model-accessories-main-image">
                <img data-aos="fade-right" src="https://s3.ap-south-1.amazonaws.com/modelfactory.in/upload/2022/Jun/25/recruiter_job_image/3517f424c7549ecdc083e419199c1ea0.jpg" alt="">
            </div>
            <div class="model-accessories-info-container">
                <div data-aos="zoom-in-up" class="model-accessories-info">
                    <div>
                        <h2 class="model-accessories-info-title">Become a model</h2>
                    </div>
                    <div>
                        <p class="model-accessories-info-text">
                            Become a model Become a model Become a model Become a model Become a model Become a model
                        </p>
                    </div>
                </div>
                <div class="model-accessories-images">
                    <img data-aos="fade-up" src="https://i.pinimg.com/564x/30/65/c7/3065c7ec5f7900d5cdc88c157ef22d36.jpg" alt="">
                    <img data-aos="fade-up" src="https://img.freepik.com/free-photo/portrait-beautiful-blonde-lady-stylish-white-silk-dress-checkered-jacket-pearl-necklace-gently-touching-neck-posing-city-square_197531-23182.jpg" alt="">
                    <img data-aos="fade-up" src="https://cf.ltkcdn.net/jewelry/images/orig/316188-1600x1067-costume-jewelry.jpg" alt="">
                </div>
            </div>
        </div>
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
