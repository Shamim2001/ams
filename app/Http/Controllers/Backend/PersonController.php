<?php

namespace App\Http\Controllers\Backend;

use App\Models\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = People::latest()->paginate();
        return view('backend.person.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name'         => 'required|string|max:255',
            'age'          => 'required',
            'gender'       => 'required',
            'father_name'  => 'nullable',
            'phone'        => 'required',
            'address'      => 'required',
            'upazila'      => 'nullable',
            'zila'         => 'nullable',
            'division'     => 'nullable',
        ]);

        try {
            // Create Person
            People::create([
                'name'         => $request->name,
                'age'          => $request->age,
                'gender'       => $request->gender,
                'father_name'  => $request->father_name,
                'phone'        => $request->phone,
                'address'      => $request->address,
                'upazila'      => $request->upazila,
                'zila'         => $request->zila,
                'division'     => $request->division,
            ]);

            toast('Person created Successfully... :)','success');
            return redirect()->route('admin.person.index');
        } catch (\Throwable $th) {
            //throw $th;
            toast($th->getMessage(),'success');
            return redirect()->route('admin.person.index');
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
    public function edit(People $person)
    {
        return view('backend.person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $person)
    {
        // validation
        $request->validate([
            'name'         => 'required|string|max:255',
            'age'          => 'required',
            'gender'       => 'required',
            'father_name'  => 'nullable',
            'phone'        => 'required',
            'address'      => 'required',
            'upazila'      => 'nullable',
            'zila'         => 'nullable',
            'division'     => 'nullable',
        ]);

        try {
            // Create Person
            $person->update([
                'name'         => $request->name,
                'age'          => $request->age,
                'gender'       => $request->gender,
                'father_name'  => $request->father_name,
                'phone'        => $request->phone,
                'address'      => $request->address,
                'upazila'      => $request->upazila,
                'zila'         => $request->zila,
                'division'     => $request->division,
            ]);

            toast('Person update Successfully... :)','success');
            return redirect()->route('admin.person.index');
        } catch (\Throwable $th) {
            //throw $th;
            toast($th->getMessage(),'success');
            return redirect()->route('admin.person.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $person)
    {
        try {
            $person->delete();

            toast('Person deleted Successfully... :)','success');
            return redirect()->route('admin.person.index');
        } catch (\Throwable $th) {
            //throw $th;
            toast($th->getMessage(),'success');
            return redirect()->route('admin.person.index');
        }
    }
}
