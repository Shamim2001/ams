<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Customer";
        $customers = Customer::latest()->get();


        return view('backend.pages.customer.index',compact('title','customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Customer";
        return view('backend.pages.customer.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'customer_name' => 'required',

        ]);
         
      
         
        Customer::create([
            'customer_name'=>$request->input('customer_name') ?? '',
            'customer_website'=>$request->input('customer_website') ?? '',
            'logo'=>uploadImage($request->logo),
        ]);

        toast('Customer Create Successfully... :)','success');
        return redirect()->route('admin.customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        

        $title = "Edit Customer";
        return view('backend.pages.customer.edit',compact('title','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update([
            'customer_name'=>$request->input('customer_name') ?? '',
            'customer_website'=>$request->input('customer_website') ?? '',
            'logo'=>uploadImage($request->logo),
        ]);

        toast('Customer Update Successfully... :)','success');
        return redirect()->route('admin.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {


        /*if ($service->image){
            deleteImage($service->image);
        }*/

        $customer->delete();
        toast('Customer Delete Successfully... :)','success');
        return redirect()->route('admin.customer.index');
    }
}
