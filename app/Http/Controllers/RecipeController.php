<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //
    public function index(){
        return Recipe::all();
    }

    public function show($id){
        return Recipe::find($id);
    }

    public function destroy($id){
        Recipe::find($id)->delete();
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        $recipe->nev = $request->nev;
        $recipe->kat_id = $request->kat_id;
        $recipe->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recipe->leiras = $request->leiras;
        $recipe->save();
    }

    public function store(Request $request)
    {
        $recipe = new Recipe();
        $recipe->nev = $request->nev;
        $recipe->kat_id = $request->kat_id;
        $recipe->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recipe->leiras = $request->leiras;
        $recipe->save();
    }
}
