<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsManager extends Controller
{
    public function prostore(){
        $product=Products::all();
        return view("product.index",compact("product"));
    }
   public function prohome(){
    $categories=Category::all();
        return view("product.create",compact("categories"));
    }
    public function procreate(Request $request){
        $categories=Category::findOrFail($request->category_id);
        $products=new Products();
        $products->name=$request->name;
        $products->slug= Str::slug($request->slug) ;
        $products->price=$request->price;
        if($categories->Products()->$products->save()){
return redirect(route("prohome"))->with("success","product added");
        }

}
}
