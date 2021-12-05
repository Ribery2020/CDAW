<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller{


    public function create_comment(Request $request){
    $request->user_id=13;
    $request->film_id=1;
    $request->imdb_id='tt0111161';
    DB::insert('INSERT INTO `comment`( `user_id`, `film_id`, `content`, `create_at`) VALUES (?,?,?,CURRENT_TIME)' ,[$request->user_id, $request->film_id, $request->commentContent]);
    return redirect('films/'. $request->imdb_id);
    }
}