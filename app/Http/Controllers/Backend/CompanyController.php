<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Companies";
        $companies = Company::orderBy('letter','ASC')->latest()->get();
        return view('backend.pages.company.index',compact('title','companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Company";
        return view('backend.pages.company.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
        ]);

        Company::create([
           'letter'=>Str::lower(mb_substr($request->name, 0, 1)),
           'name'=>$request->name,
           'slug'=>Str::slug($request->name),
           'image'=>uploadImage($request->image),
           'description'=>$request->description,
        ]);

        toast('Company Created','success');
        return redirect()->route('admin.company.index');
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
        $title = "Edit Company";
        $company = Company::findOrFail($id);
        return view('backend.pages.company.edit',compact('title','company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::findOrFail($id);

        $this->validate($request,[
            'name'=>'required',
        ]);

        $company->update([
            'letter'=>Str::lower(mb_substr($request->name, 0, 1)),
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'image'=>uploadImage($request->image,$company->image),
            'description'=>$request->description,
        ]);

        toast('Company Updated','success');
        return redirect()->route('admin.company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);
        if ($company->image){
            deleteImage($company->image);
        }
        $company->delete();
        return back();
    }
}
