<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Image Gallery";
        $images = Gallery::latest()->paginate(50);
        return view('backend.admin.pages.gallery.index',compact('title','images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>'required|image|max:350|mimes:jpg,webp,png',
        ]);

        Gallery::create([
            'user_id'=>Auth::id(),
            'image'=>uploadImage($request->image),
        ]);
        toast('Gallery Image Saved ......... :)','success');
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Display the specified resource.
     * @param $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param null $id
     * @return Application|Factory|View
     */
    public function edit($id = null)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.admin.pages.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param null $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, $id = null)
    {


        $gallery = Gallery::findOrFail($id);
        if ($request->hasFile('image')){
            @unlink($gallery->image);
        }
        $gallery->update([
            'users_id'=>auth()->id(),
            'image'=>uploadImage($request,$gallery),
            'short_description' => $request->input('short_description') ?? '',
            'status'=>1,
        ]);
        toast('Gallery Image Saved ......... :)','success');
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param null $id
     * @return RedirectResponse
     */
    public function destroy($id = null)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->image){
            @unlink($gallery->image);
        }
        $gallery->delete();
        toast('Gallery Image Delete ......... :)','success');
        return redirect()->route('admin.gallery.index');
    }
}
