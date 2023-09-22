@extends("layouts.auth")

@section("content")


    <form action="{{ route('registration') }}" method="post">
        @csrf
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img
                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"/>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Registration</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input name="firstName" type="text" id="form3Example1m"
                                                           class="form-control form-control-lg"/>
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input name="lastName" type="text" id="form3Example1n"
                                                           class="form-control form-control-lg"/>
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input name="email" type="email" id="form3Example8" class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example8">Email</label>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input name="gender" class="form-check-input" type="radio"
                                                       id="femaleGender"
                                                       value="female"/>
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input name="gender" class="form-check-input" type="radio"
                                                       id="maleGender"
                                                       value="male"/>
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input name="dateOfBirth" type="date" id="form3Example9" class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example9">Date of Birth</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input name="password" type="password" id="form3Example90"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example90">Password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example99"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example99">Confirm Password</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" class="btn btn-warning btn-lg ms-2">Registration</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
