<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Country";
        $countrys = Country::latest()->get();
        return view('backend.pages.country.index',compact('title','countrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Country";
        return view('backend.pages.country.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'country_name' => 'required',           
        ]);

        Country::create([
            'country_name'=>$request->input('country_name') ?? '',
        ]);

        toast('Data Create Successfully... :)','success');
        return redirect()->route('admin.country.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        $title = "Edit Country";
        return view('backend.pages.country.edit',compact('title','country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $country->update([
            'country_name'=>$request->input('country_name') ?? '',
        ]);

        toast('Data Update Successfully... :)','success');
        return redirect()->route('admin.country.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {


        /*if ($service->image){
            deleteImage($service->image);
        }*/

        $country->delete();
        toast('Data Delete Successfully... :)','success');
        return redirect()->route('admin.country.index');
    }
}
