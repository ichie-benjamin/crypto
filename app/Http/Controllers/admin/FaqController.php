<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $currencies = Faq::all();
        return view('admin.currencies.currencies-list', compact('currencies'));
    }
    

    public function store(Request $request)
    {
        $data = $this->getData($request);
        Currency::create($data);
        return redirect()->route('admin.currencies.index')->with('success', 'Currency was successfully added.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $currency = Currency::findOrFail($id);
        return view('admin.currencies.currencies-edit', compact('currency'));
    }
}
