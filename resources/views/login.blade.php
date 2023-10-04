@extends("layouts.auth")

@section("content")

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
                            @csrf
                            <div class="form-outline mb-4">
                                <input name="email" type="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input name="password" type="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>
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
</section>


@endsection
