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
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="nav-link active" aria-current="page" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                                </form>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('profile.show') }}">Profil</a></li>


                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">List</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./playlist.html">playlist</a></li>
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
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" id="navbarDropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo Auth::user()->name; ?>
                        </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profil</a></li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">Playlist</a></li>
                                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">FavoriteList</a></li>
                                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">Playlist</a></li>

                                        
                                    </ul>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('No Time to Die.jpeg') }}" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Most Popular</div>
                        <h1 class="display-5 fw-bolder">No Time to Die</h1>
                        <p class="lead">No Time to Die is a 2021 spy film and the twenty-fifth in the James Bond series produced by Eon Productions. It stars Daniel Craig in his fifth and final outing as the fictional British MI6 agent James Bond. It is directed by Cary Joji Fukunaga from a screenplay by Neal Purvis, Robert Wade, Fukunaga and Phoebe Waller-Bridge. L??a Seydoux, Ben Whishaw, Naomie Harris, Jeffrey Wright, Christoph Waltz, Rory Kinnear and Ralph Fiennes reprise their roles from previous films, with Rami Malek, Lashana Lynch, Billy Magnussen, Ana de Armas, David Dencik and Dali Benssalah also starring. In this film, Bond, who has left active service with MI6, is recruited by the CIA to find a kidnapped scientist, which leads to a showdown with a powerful adversary.</p>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to PlayList
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related Movies</h2>



                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <?php
                    for ($i=1; $i<=4; $i++){
                        echo '<div class="col mb-5">';
                        echo '<div class="card h-100">';
                        $result_read = DB::select('select * from films where id='.$i);
                        echo '<img class="card-img-top" src="' . $result_read['0']->picture_path . '" width="300" height="180">';
                        echo '<div class="card-body p-4">';
                        echo '<div class="text-center">';
                        echo '<h5 class="fw-bolder">';
                        $result_read = DB::select('select * from films where id='.$i);
                        echo $result_read['0']->name;

                        echo '<div class="d-flex justify-content-center small text-warning mb-2">';
                        echo '<div class="bi-star-fill"></div><div class="bi-star-fill"></div><div class="bi-star-fill"></div><div class="bi-star-fill"></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">';
                        echo '<div class="text-center">';
                        // <a class="btn btn-outline-dark mt-auto" href="{{ url('/casino')}}">Watch now!</a></div>
                        echo '<a class="btn btn-outline-dark mt-auto" href="' . $result_read['0']->path . '">Watch now!</a></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';

                    }
                    ?>                                
                </div>
            </div>
        </section>
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
