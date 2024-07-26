<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Service";
        $services = Service::latest()->get();
        return view('backend.pages.service.index',compact('title','services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Service";
        return view('backend.pages.service.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request,[
            'title' => 'required',
            'short_description' => 'required',
            'icon'=>'required|image',
            'image' => 'required|image|max:350',
            'banner'=>'required|image'
        ]);

        Service::create([
            'title'=>$request->input('title') ?? '',
            'slug'=>Str::slug($request->input('title')) ?? '',
            'short_description'=>$request->input('short_description') ?? '',
            'description'=>$request->input('description') ?? '',
            'icon'=>uploadImage($request->icon),
            'image'=>uploadImage($request->image),
            'banner'=>uploadImage($request->banner),
        ]);

        toast('Service Create Successfully... :)','success');
        return redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $title = "Edit Service";
        return view('backend.pages.service.edit',compact('title','service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request,[
            'image'=>'image|max:350'
        ]);

        $service->update([
            'users_id'=> auth()->id(),
            'title'=>$request->input('title') ?? '',
            'slug'=>Str::slug($request->input('title')) ?? '',
            'short_description'=>$request->input('short_description'),
            'description'=>$request->input('description') ?? '',
            'image'=>uploadImage($request->image,$service->image),
            'serial'=>$request->input('serial') ?? null,
        ]);

        toast('Service Update Successfully... :)','success');
        return redirect()->route('admin.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {


        if ($service->image){
            deleteImage($service->image);
        }

        $service->delete();
        toast('Service Delete Successfully... :)','success');
        return redirect()->route('admin.service.index');
    }
}
