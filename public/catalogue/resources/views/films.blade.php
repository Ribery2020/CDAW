<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>JiliJili</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="{{ asset('js/comment.js') }}"></script>
        <script src="{{ asset('js/list.js') }}"></script>
        <style>
              .column1 {
                float: left;
                margin-left: 10%;
                width: 30%;
              }
              .column2 {
                margin-top: 10%;
                margin-left: 10%;
                float: left;
                width: 50%;
              }

              /* 列后清除浮动 */
              .row:after {
                content: "";
                display: table;
                clear: both;
              }
              .bot{
                position: relative;
                top: 50px;
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
                                    <?php echo Auth::user()->name;
                                    // echo Auth::user()->id; 
                                    ?>
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


        
        <div class="row">
            <div class="column1">
              <?php
                $result_read = DB::select('select * from table_media where imdb_id =?', [$imdb_id]);
                echo '<img src="'.$result_read['0']->image.'" alt="..." width="300" height="450"/>'
              ?>
            </div>

            <div class="column1">                    
                      <h1>
                        <?php
                        $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                        echo $result_read['0']->title;
                        ?>
                      </h1>

                      <ul class="">
                        <li>
                              <span>Stars: </span>

                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->stars;
                              ?>
                          </li>
                          <li>
                              <span>Year: </span>
                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->year;
                              ?>
                          </li>

                          <li>
                              <span>Director: </span>
                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->director;
                              ?>
                          </li>
                          <li>
                              <span>Type: </span>
                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->type;
                              ?>
                          </li>
                          <li>
                              <span>Country: </span>
                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->country;
                              ?>
                          </li>
                          <li>
                              <span>Duration: </span>
                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->duration;
                              ?>
                          </li>
                          <li>
                              <span>Rating: </span>
                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->imdb_rating;
                              ?>
                          </li>
                          <li>
                              <span>Rank: </span>
                              <?php
                              $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                              echo $result_read['0']->imdb_rank;
                              ?>
                          </li>
                          <form action="{{ url('/addToWatchlist') }}" method="post">
                            @csrf
                            <?php
            
                                $user_id= Auth::user()->id;
                                //echo $user_id;
                                $film_id=DB::select('select id from `table_media` WHERE imdb_id=?', [$imdb_id]);     
                                //echo $film_id['0']->id;
                            ?>  
                          <button style="margin-top: 1%; margin-right: 1%" onclick="add_to_WatchList('{{$user_id}}' , '{{$film_id['0']->id}}')">add to WatchList</button>
                            
                            </form>

                            <form action="{{ url('/addTolist') }}" method="post">
                            @csrf
                            <?php
            
                                $user_id= Auth::user()->id;
                                //echo $user_id;
                                $film_id=DB::select('select id from `table_media` WHERE imdb_id=?', [$imdb_id]);     
                                //echo $film_id['0']->id;
                            ?>  
                          <button style="margin-top: 1%; margin-right: 1%" onclick="add_to_list('{{$user_id}}' , '{{$film_id['0']->id}}')">add to FavoriteList</button>
                            
                            </form>
 


                          
                      </ul>
            </div>           
        </div>

        <div class='row'>
          <div class="column2">
            <h1>Introduction: </h1>
          <?php
            $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
            echo $result_read['0']->introduction;
          ?>

         </div>

         <div class="row">
         <div class="column1">
         <div class="bot">


         <form action="{{ url('/addComment') }}" method="post">
         @csrf
         Comment:<br/>
         <textarea id ='comment' name= 'commentContent'cols="60" rows="5">
         </textarea>
         <br/><br/>
         <?php
         
            $user_id= Auth::user()->id;
            //echo $user_id;
            $film_id=DB::select('select id from `table_media` WHERE imdb_id=?', [$imdb_id]);     
            //echo $film_id['0']->id;

        ?>
        <button style="margin-top: 1%; margin-right: 1%" onclick="create_comment('{{$user_id}}' , '{{$film_id['0']->id}}')">Create Comment</button>


        </form>
        


        </div>
        </div>
        </div>











         <?php
            $result_read = DB::select('SELECT content FROM `comment` INNER JOIN `table_media` ON comment.film_id=table_media.id WHERE table_media.imdb_id= ?', [$imdb_id]);
            $cnt = count($result_read);
            $id =DB::select('SELECT user_id FROM `comment` INNER JOIN `table_media` ON comment.film_id=table_media.id WHERE table_media.imdb_id= ?', [$imdb_id]);
            $cnt_id = count($id);
            for ($i=0; $i<$cnt; $i++){
                echo '<div class="row">';
                echo '<div class="column1">';
                echo '<div class="bot">';
                echo '<form action="#" method="post">';
                $name_id= $id[$i]->user_id;
                $name = DB::select('SELECT `name` FROM `users` WHERE users.id=?', [$name_id]);
                echo $name['0']->name;

                echo ':<br/>';
                echo '<textarea cols="60" rows="5">';
                echo $result_read[$i]->content;
                echo '</textarea>';
                echo '<br/><br/>';
                echo '</form></div></div></div>';

            }
         ?>

 


        
         





        
    </body>
</html>

