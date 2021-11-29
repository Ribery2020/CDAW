<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Film;

class FilmController extends Controller
{
    public function showAllFilms(){
        $films = Film::where('id',1)->with('category')->get();//get->first/get()[0],prend premier
        //$authUser = Auth::user();
        //$favs = $authUser->load('favs')['favs'];
        //$favIds = array();
        //foreach($favs as $favs){
        //    array_push($favIds, $fav->id);
        //}
        $data = [
            "films"=>$films,
            //"favs"=>$favs,
            //"favIds"=>$favIds,
            //"idUser"=> Auth::id(),
        ];
        return view('films',$data);
    }
    public function addFilmForm(Film $film){
        $categories =Category::all();
        $data = ["catagories" => $categories];

        return view('addFilmForm',$data);
    }
    public function addFilm(Request $request,Film $film){
        $name = $request->input('name');
        $director = $request->input('director');
        $categories = $request->input('category');
        $data = [
            'name'=>$name,
            'director'=>$director,
           // 'category_id'=>$categoryId,
        ];
        Film::create($data);
        $film->update($data);
        return redirect('/films');
    }
    public function saveFavs(Request $request){
        $keys=$request->key();
    }
    public function select(){
        Film::all();
        Film::select("name","direction","categories.name")
            ->join("categories","films","=","categories.id");
    }
}
