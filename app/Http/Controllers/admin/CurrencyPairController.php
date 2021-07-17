<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CurrencyPair;
use Illuminate\Http\Request;

class CurrencyPairController extends Controller
{
    public function index()
    {
        $currency_pairs = CurrencyPair::all();
        return view('admin.currencies.index', compact('currency_pairs'));
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        CurrencyPair::create($data);
        return redirect()->route('admin.currencies.index')->with('success', 'CurrencyPair was successfully added.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $currency_pair = CurrencyPair::findOrFail($id);
        return view('admin.currencies.edit', compact('currency_pair'));
    }

    public function update(Request $request, $id)
    {
        $currency_pairs = CurrencyPair::findOrFail($id);
        $currency_pairs->update($this->getData($request));
        return redirect()->route('admin.currencies.index');
    }

    public function destroy($id)
    {
        $currency_pairs = CurrencyPair::findOrFail($id);
        $currency_pairs->delete();
        return redirect()->back();
    }



    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'string|min:1|max:255|required',
            'image' => 'nullable',
        ];
        return $request->validate($rules);
    }

}
