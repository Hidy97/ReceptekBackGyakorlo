<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(){
        return Category::all();
    }

    public function show($id){
        return Category::find($id);
    }

    public function destroy($id){
        Category::find($id)->delete();
    }
}
