<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transition;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = "Dashboard";
        return view('backend.pages.dashboard.dashboard',compact('title'));
    }

    function index() {
        return view('backend.pages.investigation.index');
    }
    function create() {

    }
    function edit() {

    }
    function update() {

    }
    function destroy() {

    }
}
