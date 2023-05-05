<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    //show all product
    public function index(){
        $products = Product::with('category')->get();
        // dd($products);
        $total_product = $products->whereNull('deleted_at')->count();
    
        return view('admin.show_product', compact('products', 'total_product'));
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

        $formFields = $request->validate([
                'title'=>'required', 
                'description'=>'required', 
                'price'=>'required',
                'quantity'=>'required',
                'discount_price'=>'required',
                'categories_id'=>'required', 
                'availability'=>'required',
        ]);
        
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('product', 'public');
        }
        
        // dd($formFields);
        Product::create($formFields);
        
        return redirect()->back()->with('message','Successfully added new product');      
    }

    
    public function delete_product($id){
        $product=product::find($id);
        // dd($product);

        $product->deleted_at=Carbon::now();
        $product->save();

        return redirect()->back()->with('message', 'Product archieved');
    }

    public function show_archive(){
        $products = Product::with('category')->get();
        // dd($products);
        $total_product = $products->whereNotNull('deleted_at')->count();
    
        return view('admin.show_product_archive', compact('products', 'total_product'));
    }


    public function restore_product($id){
        $product=product::find($id);
        // dd($product);

        $product->deleted_at=null;
        $product->save();

        return redirect()->back()->with('message', 'Product restored');
    }

}
