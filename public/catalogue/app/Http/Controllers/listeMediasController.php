<?php

namespace App\Http\Controllers;
use App\Models\playlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class listeMediasController extends Controller
{
    public function add_to_WatchList(Request $request){
        // DB::insert('INSERT INTO `watchlist`(`user_id`, `film_id`,`creat_at`) VALUES (?,?,CURRENT_TIME)', [12, 1]);
        // return redirect('films/tt0111161');
        DB::insert('INSERT INTO `watchlist`(`user_id`, `film_id`,`creat_at`) VALUES (?,?,CURRENT_TIME)', [$request->user_id, $request->film_id]);
        return redirect('films/'. $request->imdb_id);
    }
    public function add_to_list(Request $request){
        // DB::insert('INSERT INTO `watchlist`(`user_id`, `film_id`,`creat_at`) VALUES (?,?,CURRENT_TIME)', [12, 1]);
        // return redirect('films/tt0111161');
        DB::insert('INSERT INTO `list`(`user_id`, `film_id`,`creat_at`) VALUES (?,?,CURRENT_TIME)', [$request->user_id, $request->film_id]);
        return redirect('films/'. $request->imdb_id);
    }
    
}
