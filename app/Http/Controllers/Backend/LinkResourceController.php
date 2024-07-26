<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LinkResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinkResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Link & Resource";
        $link_resources = LinkResource::latest()->get();
        return view('backend.pages.link-resource.index',compact('title','link_resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Link & Resource";
        return view('backend.pages.link-resource.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'link_resource' => 'required',           
        ]);

        LinkResource::create([
            'link_resource'=>$request->input('link_resource') ?? '',
        ]);

        toast('Data Create Successfully... :)','success');
        return redirect()->route('admin.link-resource.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LinkResource $link_resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LinkResource $link_resource)
    {
        $title = "Edit Link & Resource";
        return view('backend.pages.link-resource.edit',compact('title','link_resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LinkResource $link_resource)
    {
        $link_resource->update([
            'link_resource'=>$request->input('link_resource') ?? '',
        ]);

        toast('Data Update Successfully... :)','success');
        return redirect()->route('admin.link-resource.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LinkResource $link_resource)
    {


        /*if ($service->image){
            deleteImage($service->image);
        }*/

        $link_resource->delete();
        toast('Data Delete Successfully... :)','success');
        return redirect()->route('admin.link-resource.index');
    }
}
