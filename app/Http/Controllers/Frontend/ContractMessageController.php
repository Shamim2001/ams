<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\MessageEmail;
use App\Models\Setting;
use App\Models\ContractMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContractMessageController extends Controller
{
    /*public function contract()
    {
        $title = "Contract";
        return view('frontend.pages.contract.contract', compact('title'));
    }*/
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',   
            'subject' => 'required',   
            'message' => 'required',   
        ]);

        ContractMessage::create([
            'name'=>$request->input('name') ?? '',
            'email'=>$request->input('email') ?? '',
            'subject'=>$request->input('subject') ?? '',
            'message'=>$request->input('message') ?? '',
         ]);

        toast('Message Send Successfully... :)','success');
        return redirect()->route('frontend.pages.contract.contract');
    }

    
}
