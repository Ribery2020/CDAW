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
        <style type="text/css">
            p{
                font-family:微软雅黑;
                font-size:14pt;
                color:red;
                background-color:gray;
            }
            ol{ /*设置有序列表的编号为小写罗马数字*/
                list-style-type:lower-roman;
            }
            img {
                width: 150px;
                height: 100px;
                margin-bottom: 10px;
            }
            .column1 {
                float: left;
                margin-left: 10%;
                width: 20%;
              }

              /* 列后清除浮动 */
              .row:after {
                content: "";
                display: table;
                clear: both;
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

    <body>

    <div class="row">
            <div class="column1">
        <p>FavoriteList</p>
        <!--利用type属性设置无序列表项目符号为实心正方形-->
        <table border="2px">
            <tr>
                <td>

                <?php
                  $index = Auth::user()->id;                
                  $result_read = DB::select('SELECT table_media.title FROM `table_media` 
                  INNER JOIN `list` ON table_media.id=list.film_id INNER JOIN `users` ON list.user_id=users.id 
                  WHERE list.user_id=?',[$index]);
                  $cnt = count($result_read);
                  for ($i=0; $i<$cnt; $i++){
                    echo '<li>';
                    echo $result_read[$i]->title;
                    echo '</li>';

                  }
                ?>
                </td>

            </tr>
        </table>
            </div>
     
      <div class="column1">
        <p>WatchList</p>
        <table border="2px">
            <tr>
                <td>

                <?php
                  $index = Auth::user()->id;                
                  $result_read = DB::select('SELECT table_media.title FROM `table_media` 
                  INNER JOIN `watchlist` ON table_media.id=watchlist.film_id INNER JOIN `users` ON watchlist.user_id=users.id 
                  WHERE watchlist.user_id=?',[$index]);
                  $cnt = count($result_read);
                  for ($i=0; $i<$cnt; $i++){
                    echo '<li>';
                    echo $result_read[$i]->title;
                    echo '</li>';

                  }
                ?>
                </td>

            </tr>
        </table>
      </div>
      <div class="column1">

        <p>HistoryList</p>
        <table border="2px">
            <tr>
                <td>

                <?php
                  $index = Auth::user()->id;                
                  $result_read = DB::select('SELECT table_media.title FROM `table_media` 
                  INNER JOIN `history` ON table_media.id=history.film_id INNER JOIN `users` ON history.user_id=users.id 
                  WHERE history.user_id=?',[$index]);
                  $cnt = count($result_read);
                  for ($i=0; $i<$cnt; $i++){
                    echo '<li>';
                    echo $result_read[$i]->title;
                    echo '</li>';

                  }
                ?>
                </td>

            </tr>
        </table>
            </div>
            </div>
    </body>


</html>