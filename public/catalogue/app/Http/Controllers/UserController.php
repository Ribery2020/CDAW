<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class UserController extends Controller

{
    public function add() {
        $db = DB::table('users');
        $rst= $db -> insert([
        [
            'id'=>'01',
            'name'=>'feifan',
            'email'=>'feifan@gmail.com',
            'password'=>'123456',
            'remember_token'=>'123'
        ]
        ]);
        dd($rst);
    }

    public function select() {
        $db = DB::table('users');
        $rst= $db -> get();
        dd($rst);
    }

}
