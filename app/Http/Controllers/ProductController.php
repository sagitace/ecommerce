<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=product::all();
        $total_product=product::all()->count();

        return view('admin.show_product', compact('products','total_product'));
    }


    public function create(){
        $category = Category::all();
        return view('admin.product', compact('category'));
    }

        public function view_product(){
    $category = category::all();
    return view('admin.product', compact('category'));
    }

    public function store(Request $request){
        //  dd($request);
        // $formFields = $request->validate([
        //         'title'=>'required', 
        //         'description'=>'required', 
        //         'price'=>'required',
        //         'quantity'=>'required',
        //         'discount_price'=>'required',
        //         'category_id'=>'required', 
        // ]);

        // dd($formFields); 
        $product = new product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        $product->availability = $request->availability;
        $product->image = $request->image;

        // dd($product);
        // $image=$request->image;
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        // $request->image->move('product', $imagename);
        // $product->image = $imagename;

        $product->save();

        return redirect()->back()->with('message','Successfully added new product');
    }

}
