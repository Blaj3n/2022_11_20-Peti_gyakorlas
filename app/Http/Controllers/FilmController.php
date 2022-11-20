<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function index(){
        $filmek = response()->json(Film::all());
        return $filmek;
    }
    public function show($id){
        $film = response()->json(Film::find($id));
        return $film;
    }
    public function store(Request $request){
        $film = new Film();
        $film->nev=$request->nev;
        $film->forgalmazo_id=$request->forgalmazo_id;
        $film->hossz=$request->hossz;
        $film->besorolas=$request->besorolas;
        $film->save();
    }
    public function update($id, Request $request){
        $film = Film::find($id);
        $film->nev=$request->nev;
        $film->forgalmazo_id=$request->forgalmazo_id;
        $film->hossz=$request->hossz;
        $film->besorolas=$request->besorolas;
        $film->save();
    }
    public function destroy($id){
        $film = Film::find($id);
        $film->delete();
    }

}
