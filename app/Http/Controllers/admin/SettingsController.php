<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index(){
        return view('admin.settings.home');
    }
    public function mails(){
        return view('admin.settings.mails');
    }
    public function fees(){
        return view('admin.settings.fees');
    }

    public function store(Request $request){
        return $request;
        setting($request->except('_token'))->save();
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
