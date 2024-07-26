<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Supplier";
        $suppliers = Supplier::with('country')->latest()->get();
        $countrys = Country::latest()->get();
        return view('backend.pages.supplier.index',compact('title','suppliers', 'countrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Supplier";
        $countrys = Country::all();
        return view('backend.pages.supplier.create',compact('title','countrys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'country' => 'required',
            'company_name' => 'required',
        ]);

        $imageName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('images'), $imageName);

        Supplier::create([
            'country_id'=>$request->input('country') ?? '',
            'company_name'=>$request->input('company_name') ?? '',
            'company_website'=>$request->input('company_website') ?? '',

            'logo'=>$imageName,
            'serial'=>$request->input('serial') ?? '',
        ]);

        toast('Supplier Create Successfully... :)','success');
        return redirect()->route('admin.supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Supplier";
        $supplier = Supplier::findOrFail($id);
        $countrys = Country::all();
        return view('backend.pages.supplier.edit',compact('title','supplier', 'countrys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $supplier = Supplier::findOrFail($id);
        $this->validate($request,[
            'country'=>'required',
            'company_name'=>'required',
        ]);
        if ($request->hasfile('logo')) {
            $imageName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);

            $supplier->update([
                'country_id'=>$request->input('country') ?? '',
                'company_name'=>$request->input('company_name') ?? '',
                'company_website'=>$request->input('company_website') ?? '',

                'logo'=>$imageName,
            ]);
        }
        else
        {
            $supplier->update([
                'country_id'=>$request->input('country') ?? '',
                'company_name'=>$request->input('company_name') ?? '',
                'company_website'=>$request->input('company_website') ?? '',

             ]);
        }


        toast('Supplier Update Successfully... :)','success');
        return redirect()->route('admin.supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        /*if ($service->image){
            deleteImage($service->image);
        }*/
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        toast('Supplier Delete Successfully... :)','success');
        return redirect()->route('admin.supplier.index');
    }
}
