<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function add(){
        $db = DB::table('categories');
        $rst= $db -> insert([
            [
                'id'=>'01',
                'name'=>'feifan',
                'email'=>'feifan@gmail.com',
                'password'=>date('Y-m-d H:i:s'),
                'remember_token'=>'123'
            ]
        ]);
        dd($rst);
    }
}
