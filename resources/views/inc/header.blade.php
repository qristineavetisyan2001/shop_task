<link rel="stylesheet" href="{{asset("css/header_style.css")}}">
<nav class="navbar navbar-expand-lg navbar-dark header">
    <div class="ml-3">
        <a href="{{route("home")}}"><img class="logo " src="{{asset("images/22.png")}}" alt=""></a>
    </div>
    <a class="navbar-brand mx-3" href="{{route("home")}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="navbar-brand mx-3" href="{{ route("catalog") }}">Catalog</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand mx-3" href="{{ route("categories") }}">Categories</a>
            </li>
        </ul>
        <div class="container">
            <form id="searchForm" action="{{route('search')}}">
                @csrf
                <input name='searchText' class="input" type="text" placeholder="Search...">
                <div class="search"></div>
            </form>
        </div>
        <div class="d-flex">
            @if(!session("loggedUser"))
                <div class="mx-2 auth_button_div">
                    <a class="auth_button" href="{{route("loginPage")}}">
                        Login
                    </a>
                </div>
                <div class="auth_button_div">
                    <a class=" auth_button" href="{{route("registrationPage")}}">
                        Registration
                    </a>
                </div>
            @else
                <div>
                    <a class="p-2 bg-light text-dark" href="{{route("userPage")}}">
                        {{ session("loggedUser")->firstName }}
                    </a>
                </div>
                <div class="mx-3">
                    <a class="p-2 bg-light text-dark" href="{{route("getBasketProducts")}}">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
                <div>
                    <a class="p-2 bg-light text-dark" href="{{route("logOut")}}">
                        LogOut
                    </a>
                </div>
            @endif
        </div>
    </div>
</nav>

<script>
    document.addEventListener('keyup', (e)=>{
        if(e.code === 'Enter'){
            document.getElementById('searchForm').submit();
        }
    })
</script>


