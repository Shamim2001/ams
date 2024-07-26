<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Member";
        $members = TeamMember::latest()->get();
        return view('backend.pages.member.index',compact('title','members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Member";
        return view('backend.pages.member.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
        ]);

        TeamMember::create([
            'name'=>$request->name,
            'position'=>$request->position,
            'image'=>uploadImage($request->image),
            'fb_url'=>$request->fb_url,
            'youtube_url'=>$request->youtube_url,
            'insta_url'=>$request->insta_url,
        ]);

        toast('Member Created','success');
        return redirect()->route('admin.team-member.index');
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
        $title = "Member Edit";
        $member = TeamMember::findOrFail($id);
        return view('backend.pages.member.edit',compact('title','member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = TeamMember::findOrFail($id);

        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
        ]);

        $member->update([
            'name'=>$request->name,
            'position'=>$request->position,
            'image'=>uploadImage($request->image,$member->image),
            'fb_url'=>$request->fb_url,
            'youtube_url'=>$request->youtube_url,
            'insta_url'=>$request->insta_url,
        ]);

        toast('Member Updated','success');
        return redirect()->route('admin.team-member.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = TeamMember::findOrFail($id);
        if ($member->image){
            deleteImage($member->image);
        }

        $member->delete();

        toast('Delete Success','success');
        return back();
    }
}
