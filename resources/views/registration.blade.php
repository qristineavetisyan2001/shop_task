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
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Sign up now</h2>
                            <form action="{{route('registration')}}" method="post">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input name="firstName" type="text" id="form3Example1" class="form-control"/>
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input name="lastName" type="text" id="form3Example2" class="form-control"/>
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="email" type="email" id="form3Example3" class="form-control"/>
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <div class="d-flex form-outline mb-4 gap-3">
                                    <div>Gender:</div>
                                    <div>
                                        <input value="male" name="gender" type="radio" id="male"/>
                                        <label class="form-label" for="male">Male</label>
                                    </div>
                                    <div>
                                        <input value="female" name="gender" type="radio" id="female"/>
                                        <label class="form-label" for="female">Female</label>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="dateOfBirth" type="date" id="date" class="form-control"/>
                                    <label class="form-label" for="date">Date Of Birth</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input name="password" type="password" id="password" class="form-control"/>
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="confirmPassword" class="form-control"/>
                                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                                </div>

                                <!-- Submit button -->
                                <button id="signupButton" disabled type="submit" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>

                                <div>
                                    Already have an account? <a href="{{route('loginPage')}}">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img
                        src="https://e1.pxfuel.com/desktop-wallpaper/201/872/desktop-wallpaper-wlop-digital-art-artwork-%E2%80%A2-for-you-aeolian-thumbnail.jpg"
                        class="w-100 h-25  shadow-4"
                        alt=""/>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const signupButton = document.getElementById('signupButton');

        confirmPasswordInput.addEventListener('keyup', (e) => {
            if (passwordInput.value === e.target.value) {
                signupButton.disabled = false;
            }
            else {
                signupButton.disabled = true;
            }
        })

    </script>
@endsection
