
    <nav class="navbar navbar-expand-lg navbar-dark header">
        <div>
            <img class="logo" src="https://seeklogo.com/images/C/carrinho-de-compras-logo-8D9FE029E6-seeklogo.com.png" alt="" >
        </div>
        <a class="navbar-brand mx-3" href="{{route("home")}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("catalog") }}">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="d-flex">
                <div class="mx-2">
                    <a class="p-2 bg-light text-dark" href="{{route("loginPage")}}">
                        Login
                    </a>
                </div>
                <div>
                    <a class="p-2 bg-light text-dark" href="{{route("registrationPage")}}">
                        Registration
                    </a>
                </div>
            </div>
        </div>
    </nav>


