<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "All Member";
        $users = User::where('type','user')->latest()->paginate(30);
        return view('backend.admin.pages.user.index',compact('title','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with(['transitions','transitions.head'])->findOrFail($id);
        $title = $user->name . ' of Details';
        return view('backend.admin.pages.user.show',compact('title','user'));
    }

    public function approve(string $id)
    {

        $user = User::findOrFail($id);
        $user->is_approve = $user->is_approve == true ? false :true;
        $user->save();

        toast('User Approval Change Success','success');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
