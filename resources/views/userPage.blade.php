@extends("layouts.app")

@section("content")

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .user-page-wrapper {
            width: 100%;
            border: 5px solid red;
            padding: 60px;
        }

        .user-page-container {
            max-width: 1000px;
            margin: 0 auto;
            border: 5px solid #0c5460;
            display: flex;
        }

        .user-image-container {
            border: 5px solid #ffff00;
            padding: 20px;
            height: 700px;
        }

        .user-image-container div button {
            display: block;
            margin: 10px auto;
        }

        .user-info-container {
            border: 5px solid #2ca02c;
            flex-grow: 2;
            padding: 20px;
        }

        .user-avatar {
            width: 200px;
        }

        .user-info-items {
            border: 5px solid #393f81;
            margin-bottom: 10px;
        }

        .user-info-items > :nth-child(odd) {
            font-size: 20px;
            font-weight: 800;
        }
    </style>

    <div class="user-page-wrapper">
        <div class="user-page-container">
            <div class="user-image-container">
                <div>
                    <img class="user-avatar" src="{{asset("uploads/avatar/".session("loggedUser")->avatar)}}" alt="">
                </div>
            </div>
            <div class="user-info-container">
                <div class="user-info-items">
                    <div>
                        Firstname
                    </div>
                    <div>
                        @if(session("loggedUser"))
                            {{session("loggedUser")->firstName}}
                        @endif
                    </div>
                </div>
                <div class="user-info-items">
                    <div>
                        Lastname
                    </div>
                    <div>
                        @if(session("loggedUser"))
                            {{session("loggedUser")->lastName}}
                        @endif
                    </div>
                </div>
                <div class="user-info-items">
                    <div>
                        Email
                    </div>
                    <div>
                        @if(session("loggedUser"))
                            {{session("loggedUser")->email}}
                        @endif
                    </div>
                </div>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Edit
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="card-body text-black">
                                    <div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h3 class="mb-5 text-uppercase">UPDATE</h3>
                                    <form action="{{route("changeUserInfo")}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-4 mt-3">
                                                <img class="user-avatar"
                                                     src="{{asset("uploads/avatar/".session("loggedUser")->avatar)}}"
                                                     alt="">
                                            </div>
                                            <div class="col-md-6 mb-4 mt-3">
                                                <input type="file">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4 mt-3">
                                                <div class="form-outline">
                                                    <input value="{{session("loggedUser")->firstName}}"
                                                           name="firstName" type="text" id="form3Example1m"
                                                           class="form-control form-control-lg"/>
                                                    <label class="form-label" for="form3Example1m">First
                                                        name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 mt-3">
                                                <div class="form-outline">
                                                    <input value="{{session("loggedUser")->lastName }}"
                                                           name="lastName" type="text" id="form3Example1n"
                                                           class="form-control form-control-lg"/>
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input value="{{session("loggedUser")->email }}" name="email"
                                                   type="email" id="form3Example8"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example8">Email</label>
                                        </div>
                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                            <h6 class="mb-0 me-4">Gender: </h6>
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input @if(session("loggedUser")->gender=="female") checked
                                                       @endif name="gender" class="form-check-input" type="radio"
                                                       id="femaleGender"
                                                       value="female"/>
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input @if(session("loggedUser")->gender=="male") checked
                                                       @endif name="gender" class="form-check-input" type="radio"
                                                       id="maleGender"
                                                       value="male"/>
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input value="{{session("loggedUser")->dateOfBirth }}"
                                                   name="dateOfBirth" type="date" id="form3Example9"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example9">Date of Birth</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input name="password" type="password" id="form3Example90"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example90">Password</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input name="confirmPassword" type="password" id="form3Example99"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example99">Confirm Password</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
    </script>

@endsection
