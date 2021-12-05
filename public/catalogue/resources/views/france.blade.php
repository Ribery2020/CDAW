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

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
         
li {
    text-align: -webkit-match-parent;
    display: list-item;
}
 
.fav_list{
    min-height: 95%;
    padding: 0 32px 30px;
    margin-top: 50px;
    margin-right: 50px;
    margin-left: 200px;
    background-color: #fff;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.05);
}
.fav_list_box{
    box-sizing: border-box;
    display: block;
    overflow: hidden;
    zoom: 1;
}
.fav_list_title{
    height: 90px;
    line-height: 90px;
    /*border-bottom: 1px solid #e0e0e0;*/
    display: block;
}
.fav_list_title_h3{
    display : inline;
}
.fav_num{
    font-size: 14px;
    color: #4d4d4d;
    margin-top: 30px;
    float: right;
}
.my_fav_con{
    display: block;
}
.my_fav_list{
    margin: 0;
    padding: 0;
    font-size: 100%;
    vertical-align: baseline;
    border: 0;
    display: block;
    overflow: hidden;
    zoom: 1;
}
.my_fav_list_li{
    padding: 16px 0;
    font-size: 0;
    border-top: 1px solid #e0e0e0;
    list-style: none;
}
.my_fav_list_a{
    width: 78%;
    line-height: 24px;
    font-size: 16px;
    vertical-align: middle;
    color: #4d4d4d;
    text-decoration: none;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-block;
    overflow: hidden;
    cursor: pointer;
}
.my_fav_list_label{
    margin-left: 10%;
    font-size: 16px;
    vertical-align: middle;
    display: inline-block;
}
.my_fav_list_label span{
    color: #ccc;
    margin-right: 15px;
    vertical-align: middle;
    display: inline-block;
}
.cancel_fav{
    font-style: normal;
    color: #999;
    vertical-align: middle;
    cursor: pointer;
    display: inline-block;
}
.my_fav_list_a:hover{
    color: red;
}
        </style>
    </head>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/')}}">Acceuil</a>
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
                                <li class="nav-item"><a class="nav-link" href="{{ url('/listeMedias')}}">FavoriteList</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/listeMedias')}}">HistoryList</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/listeMedias')}}">WatchList</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard')}}">Dashboard</a></li>

                            </ul>

                            <form class="d-flex">
                                <button class="btn btn-outline-dark" type="submit">
                                    <a href="{{ route('profile.show') }}">       
                                        Bonjour ,                                  
                                    <?php echo Auth::user()->name; ?>
                                     </a>            
                                </button>
                            </form>                            

                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                    @endauth
                @endif
                </div>
            </div>
        </nav>
    </body>

    <body style="background-color: rgba(204,204,204,0.23)">
 
 
<div class="fav_list">
    <div data-v-357a65ed="" class="fav_list_box">
        <div  class="fav_list_title">
            <h3 class="fav_list_title_h3">Relative</h3>
        </div>
        <div  class="my_fav_con">
            <div>
                <ul  class="my_fav_list">

                    <?php
                            $index = 'France';                
                            $result_read = DB::select('SELECT * FROM `table_media` WHERE country LIKE ?',[$index]);
                            $cnt = count($result_read);
                            for ($i=0; $i<$cnt; $i++){
                                echo '<li class="my_fav_list_li" id="">';
                                echo '<a  class="my_fav_list_a" href="films/'. $result_read[$i]->imdb_id .'">';
                                echo $result_read[$i]->title;
                                echo '</a>';
                                echo '<label class="my_fav_list_label">';
                                echo '<a  class="cancel_fav"><em>Director: '.$result_read[$i]->director.'</em></a>';
                                echo '</label>';
                                echo '</li>';
                            }
                        ?>                    
               </ul>
            </div>
        </div>
    </div>
</div>
 
</body>

</html>