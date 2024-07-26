<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Products";
        $products = Product::orderBy('letter','ASC')->latest()->get();
        return view('backend.pages.product.index',compact('title','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Product";
        return view('backend.pages.product.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
           'image'=>'required|image',
        ]);

        Product::create([
           'letter'=>Str::lower(mb_substr($request->name, 0, 1)),
           'company_name'=>$request->company_name,
           'name'=>$request->name,
           'slug'=>Str::slug($request->name),
           'technical_name'=>$request->technical_name,
           'image'=>uploadImage($request->image),
           'description'=>$request->description,
        ]);

        toast('Product Created','success');
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Product";
        $product = Product::findOrFail($id);
        return view('backend.pages.product.edit',compact('title','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $this->validate($request,[
            'name'=>'required',
        ]);

        $product->update([
            'letter'=>Str::lower(mb_substr($request->name, 0, 1)),
            'company_name'=>$request->company_name,
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'technical_name'=>$request->technical_name,
            'image'=>uploadImage($request->image,$product->image),
            'description'=>$request->description,
        ]);

        toast('Product Updated','success');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if ($product->image){
            deleteImage($product->image);
        }
        $product->delete();
        return back();
    }
}
