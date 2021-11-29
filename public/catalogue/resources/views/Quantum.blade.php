<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>JiliJili</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/dashboard')}}">Acceuil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Route::has('login'))
                        @auth
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                <li class="nav-item"><a method="POST" class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('profile.show') }}">Profil</a></li>


                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">List</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./playlist.html">PlayList</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="./watchlist.html">WatchList</a></li>
                                    <li><a class="dropdown-item" href="./favoritelist.html">FavoriteList</a></li>
                                </ul>
                            </ul>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                    @endauth
                @endif
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            PlayList
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </body>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
            .box {
                margin: 200px auto;
                margin-left: 200px;
                overflow: hidden;
            }
            
            img {
                width: 300px;
                height: 200px;
                margin-bottom: 10px;
            }
            
            .box>div {
                float: left;
            }
            
            .left img {
                width: 750px;
                height: 500px;
                margin-right: 200px;
            }
            .bot{
                position: relative;
                top: 50px;
            }
        </style>
    </head>
    
    <body>
        <div class="box">
            <div class="left"><img src="{{ asset('Quantum of Solace.jpeg') }}" alt="">
                <div class="bot">
                    <form action="#" method="post">
                    Comment: <br/> 
                    <textarea cols="60" rows="5">  xxxxxxxxxxxxxxxxxxxxx
                    </textarea>
                    <br/><br/>
                    <input type="submit" value="submit"/>
                    </form>
                   </div>
            </div>
            <div class="right">
                <div>
                    Relative Movies
                </div>
                <div>
                    <a href="{{ url('/Notime')}}">
                    <img src="{{ asset('No Time to Die.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="{{ url('/casino')}}">
                        <img src="{{ asset('casino royale.jpeg') }}" alt="">
                    </a>
                </div>    
                <div>
                    <a href="{{ url('/Skyfall')}}">
                        <img src="{{ asset('Skyfall.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="{{ url('/Spectre')}}">
                        <img src="{{ asset('Spectre.jpeg') }}" alt="">
                    </div>
                    </a>
            </div>
        </div>
    </body>

    <body>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

   