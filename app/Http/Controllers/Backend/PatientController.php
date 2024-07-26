<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Imports\PatientImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Patient";
        $patients = Patient::latest()->get();
        return view('backend.pages.patient.index',compact('title','patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Patient";
        return view('backend.pages.patient.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Patient::create([
            'patient_id'=>$request->input('patient_id'),
        ]);

        toast('Data Create Successfully... :)','success');
        return redirect()->route('admin.patient.index');
    }

    // public function import(Request $request)
    // {

    //     $request->validate([
    //         'file' => 'required|file|mimes:xlsx,xls',
    //     ]);
    //     $file = $request->file('file');
    //     Excel::import(new PatientImport, $file);

    //     toast('Data Imported Successfully... :)','success');
    //     return redirect()->route('admin.patient.index');
    // }

    public function import(Request $request)
{
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new PatientImport, $file);

            toast('Data Imported Successfully... :)', 'success');
            return redirect()->route('admin.patient.index');
        } else {
            toast('No file found or invalid file.', 'error');
            return redirect()->back();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        $title = "Edit Patient";
        return view('backend.pages.patient.edit',compact('title','patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->update([
            'patient_id'=>$request->input('patient_id'),
        ]);

        toast('Data Update Successfully... :)','success');
        return redirect()->route('admin.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {

        $patient->delete();
        toast('Data Delete Successfully... :)','success');
        return redirect()->route('admin.patient.index');
    }
}
