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

        .user-image-container{
            border: 5px solid #ffff00;
            padding: 20px;
            height: 700px;
        }

        .user-image-container div button{
            display: block;
            margin: 10px auto;
        }

        .user-info-container{
            border: 5px solid #2ca02c;
            flex-grow: 2;
            padding: 20px;
        }

        .user-avatar{
            width: 200px;
        }

        .user-info-items{
            border: 5px solid #393f81;
            margin-bottom: 10px;
        }

        .user-info-items>:nth-child(odd){
            font-size: 20px;
            font-weight: 800;
        }
    </style>

<div class="user-page-wrapper">
    <div class="user-page-container">
        <div class="user-image-container">
            <div>
                <img class="user-avatar" src="https://cdn-icons-png.flaticon.com/512/1053/1053244.png" alt="">
            </div>
            <div>
                <button>Change</button>
            </div>
        </div>
        <div class="user-info-container">

            <div class="user-info-items">
                <div>
                    Firstname
                </div>
                <div>
                    Example firstname
                </div>
            </div>
            <div class="user-info-items">
                <div>
                    Lastname
                </div>
                <div>
                    Example lastname
                </div>
            </div>
            <div class="user-info-items">
                <div>
                    Email
                </div>
                <div>
                    example@gmail.com
                </div>
            </div>
            <div>
                <button>Edit</button>
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
