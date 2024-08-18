<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::latest()->paginate(10);
        return view('backend.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|string|max:255'
        ]);


        try {
            // Create Type
            Type::create([
                'name'         => $request->name,
            ]);

            toast('Type created Successfully... :)','success');
            return redirect()->route('admin.type.index');
        } catch (\Throwable $th) {
            //throw $th;
            toast($th->getMessage(),'success');
            return redirect()->route('admin.type.index');
        }
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
    public function edit(Type $type)
    {
        return view('backend.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        // validation
        $request->validate([
            'name' => 'required|string|max:255'
        ]);


        try {
            // Create Type
            $type->update([
                'name'         => $request->name,
            ]);

            toast('Type updated Successfully... :)','success');
            return redirect()->route('admin.type.index');
        } catch (\Throwable $th) {
            //throw $th;
            toast($th->getMessage(),'success');
            return redirect()->route('admin.type.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        toast('Type deleted Successfully... :)','success');
        return redirect()->route('admin.type.index');
    }
}
