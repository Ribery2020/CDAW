<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Film;
class ShowFilmsController extends Controller
{

    public function select(){
        Film::select("films.name","director","catelogies.name")->join("catelogies","films.catelogy_id","=","catelogies.id");
    }


    public function showAllFilms(){
        $films = Film::with('category')->get();
        // $authUser = Auth::user();
        // $favs = $authUser->load("favs")["favs"];
        $data = [
            "films" => $films,
        ];

        return view('films', $data);
    }


    public function addFilm(Request $request){
        $name = $request->input('name');
        $director = $request->input('director');
        $categoryId = $request->input('category');
        $data = [
            "name" => $name,
            'director'=>$director,
            'category_id'=>$categoryId,
        ];
        Film::create($data);

        //return redirect('/films');
        return "success";

    }

    public function updateFilm(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $director = $request->input('director');
        $categoryId = $request->input('category');
        $data = [
            "id"=>$id,
            "name" => $name,
            'director'=>$director,
            'category_id'=>$categoryId,
        ];

        Film::whereId($id)->update($data);

        return "success";

    }

    public function deleteFilm(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $director = $request->input('director');
        $categoryId = $request->input('category');
        $data = [
            "id"=>$id,
            "name" => $name,
            'director'=>$director,
            'category_id'=>$categoryId,
        ];

        Film::whereId($id)->delete($data);

        return "success";

    }
}
