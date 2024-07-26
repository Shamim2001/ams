<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    public function pages()
    {
        $title = "Page Setting";
        return view('backend.pages.setting.pages.home',compact('title'));
    }
    public function getInTouch()
    {
        $title = "Get In Touch Information";
        return view('backend.pages.setting.pages.get_in_touch',compact('title'));
    }

    public function webSettings()
    {
        $title = "Website Settings";
        return view('backend.pages.setting.pages.web-settings',compact('title'));
    }

    public function update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $business_settings = Setting::where('type', $type)->first();
            if($business_settings!=null){
                $business_settings->value = $request->hasFile($type)  ? uploadImage($request[$type],$business_settings->value ) : ($request[$type] == null ? $business_settings->value : $request[$type]);
                $business_settings->save();
            }
            else{
                $business_settings = new Setting();
                $business_settings->type = $type;
                $business_settings->value = $request->hasFile($type)  ? uploadImage($request[$type]) : $request[$type];
                $business_settings->save();
            }
        }

        Artisan::call('cache:clear');
        toast('Data Updated ......... :)','success');
        return back();
    }
}
