@extends("layouts.auth")

@section("content")

{{--            <div class="login_wrapper">--}}
{{--                <div class="login_container">--}}
{{--                    <div>--}}
{{--                        <img class="login_image" src="https://img.freepik.com/premium-photo/creepy-alien-invader-against-background-blurry-lights-concept-alien_158863-1716.jpg?w=360" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="login_main">--}}
{{--                        <div class="login_title">Login</div>--}}
{{--                        <div>--}}
{{--                            <form action="" class="login_form">--}}
{{--                                <input type="email" name="email" id="">--}}
{{--                                <input type="password" name="password" id="">--}}
{{--                                <button>Login</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4 d-flex justify-content-center align-items-center mt-3 login_container">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right" style="
                    background: hsla(0, 0%, 100%, 0.55);
                    backdrop-filter: blur(30px);
                    width: 500px;
                ">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Login</h2>
                        <form action="{{route('login')}}" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input name="email" type="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input name="password" type="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Checkbox -->


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Login
                            </button>


                            <div>
                                No account? <a href="{{route('registrationPage')}}">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://e1.pxfuel.com/desktop-wallpaper/201/872/desktop-wallpaper-wlop-digital-art-artwork-%E2%80%A2-for-you-aeolian-thumbnail.jpg" class="w-100 h-25  shadow-4"
                     alt="" />
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

@endsection
