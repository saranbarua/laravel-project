<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Doctrine\DBAL\Query\QueryException;
class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('backend.products.index', ['products' => $products]);
    }
    public function create(){
    
     return view('backend.products.create');
     
 }
 public function store(Request $request){
     
     $product=new Product;
     $product->product_name=$request->input('product_name');
     $product->category_name=$request->input('category_name');
     $product->brand_name=$request->input('brand_name');
     $product->description=$request->input('description');
     if($request->hasFile('image')){
         $file=$request->file('image');
         $extension=$file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/products/',$filename);
         $product->image=$filename;
         
     }
     $product->save();
     return redirect()->back()->with('status','Product added successful');
     
 }
 public function edit($id){
     
     $product=Product::find($id);
     return view('backend.products.edit', compact('product'));
     

 }
 public function update(Request $request, $id){
     $product=Product::find($id);
     $product->product_name=$request->input('product_name');
     $product->category_name=$request->input('category_name');
     $product->brand_name=$request->input('brand_name');
     $product->description=$request->input('description');
     if($request->hasFile('image')){
         $destination='uploads/products/.$product->image';
         if(File::exists($destination)){
             File::delete($destination);
         }
         $file=$request->file('image');
         $extension=$file->getClientOriginalExtension();
         $filename=time().'.'.$extension;
         $file->move('uploads/products/',$filename);
         $product->image=$filename;
         
     }
     $product->update();

     return redirect()->back()->with('status','Product Information Updated.');
 }
  public function delete($id){
            $product=Product::onlyTrashed()->findOrFail($id);
            $product->forceDelete();
            return redirect()->route('backend.products.index')->withMessaage('successfully  deleted');
        }

        public function show()
    {
        $products = Product::all();
        return view('ecommerce.product', ['products' => $products]);
    }
 
}
