<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
               

        $products = Product::all();
        // ->join('categories', 'products.category_id', '=', 'categories.category_id')
        // ->select('products.*','categories.title')
        // ->get();

        return view ('products.index',['product' => $products]);
    }
    
    public function create()
    {
        return view('products.create');
    }
    
    public function store (Request $request)
    {
        DB::table('products')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'title' => $request->title
        ]);

         
        return redirect ('/products');
    }

    public function show($id)
    {
        $products = DB::table('products')->where('id',$id)->get();
        
    }
    
    public function edit($id)
    {
        $products = DB::table('products')->where('id',$id)->get();
       
    }
    
    public function update(Request $request)
    {
        DB::table('products')->where('id',$request->id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect ('/products');  
    }

    public function destroy($id)
    {
      $pr = DB::table('products')->where('id',$id)->delete();
      return redirect ('/products');
    }
}
        