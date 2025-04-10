<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryManager extends Controller
{
    public function store(){
        $category=Category::all();
        return view("category.index",compact("category"));
    }
   public function home(){
        return view("category.create");
    }
    public function create(Request $request){
        $request->validate([
            "drug_class"=>"required",
            "description"=>"required"
        ]);
        $category= new Category();
        $category->drug_class=$request->drug_class;
        $category->slug=Str::slug("$request->slug");
        $category->description=$request->description;
if($category->save()){
    return view("category.create")->with("success","categoryadded successfully");
}return redirect(route("create"));
    }
}
