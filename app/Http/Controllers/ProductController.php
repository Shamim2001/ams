<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Company;

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
        $companys = Company::orderBy('letter','ASC')->latest()->get();
        return view('backend.pages.product.index',compact('title','products', 'companys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();



        $title = "Create Product";
        return view('backend.pages.product.create',compact('title','companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
        //   'image'=>'required|image',
           'company_id' => 'required',


        ]);
        //dd($request);     
        Product::create([
           'company_id' => $request->company_id, 
           'letter'=>Str::lower(mb_substr($request->name, 0, 1)),
           'name'=>$request->name,
           'slug'=>Str::slug($request->name),
           'technical_name'=>$request->technical_name,
        //   'image'=>uploadImage($request->image),
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
        $companys = Company::orderBy('letter','ASC')->latest()->get();
        return view('backend.pages.product.edit',compact('title','product','companys'));
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
            'company_id' => $request->company_id,
            'letter'=>Str::lower(mb_substr($request->name, 0, 1)),
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'technical_name'=>$request->technical_name,
            // 'image'=>uploadImage($request->image,$product->image),
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
        // if ($product->image){
        //     deleteImage($product->image);
        // }
        $product->delete();
        return back();
    }
    public function getCompany($id)
    {
        $products = Product::where('company_id', $id)->get();
        return response()->json([
            'product' => $products
        ]);
    }

}
