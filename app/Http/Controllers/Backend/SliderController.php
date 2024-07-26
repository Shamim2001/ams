<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "All Slider";
        $sliders = Slider::latest()->get();
        return view('backend.pages.slider.index',compact('title','sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Slider Create";
        return view('backend.pages.slider.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>'required|image',
        ]);

        Slider::create([
            'title'=>$request->title,
            'title_two'=>$request->title_two,
            'description'=>$request->description,
            'image'=>uploadImage($request->image),
            'url'=>$request->url,
        ]);

        toast('Slider Created','success');
        return redirect()->route('admin.slider.index');
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
        $title = "Edit Slider";
        $slider = Slider::findOrFail($id);
        return view('backend.pages.slider.edit',compact('title','slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::findOrFail($id);
        // $this->validate($request,[
        //     'title'=>'required',
        // ]);

        $slider->update([
            'title'=>$request->title,
            'title_two'=>$request->title_two,
            'description'=>$request->description,
            'image'=>uploadImage($request->image,$slider->image),
            'url'=>$request->url,
        ]);

        toast('Slider Update','success');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider->image){
            deleteImage($slider->image);
        }
        $slider->delete();

        toast('Slider Deleted','success');
        return back();
    }
}
