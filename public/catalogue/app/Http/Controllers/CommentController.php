<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller{
    public function create_comment(Request $request){
        // echo "<script>console.log('$request->user_id')</script>";
      DB::insert('INSERT INTO `comment`( `user_id`, `film_id`, `content`, `create_at`) VALUES (?,?,?,CURRENT_TIME)' ,[$request->user_id, $request->film_id, $request->commentContent]);
       echo $request->commentContent;
       echo $request->user_id;
    // DB::insert('INSERT INTO `comment`(`user_id`, `film_id`) VALUES ('.$request->user_id.','.$request->film_id);
    }
}