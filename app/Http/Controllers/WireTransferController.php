<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WireTransferController extends Controller
{
    public function index(){
        return view('backend.wtransfer.index');
    }


    protected function getData(Request $request)
    {
        $rules = [
            'account_name' => 'string|min:1|max:255|required',
           'account_number' => 'string|min:1|max:1000|required',
            'bank_country' => 'string|min:1|required',
           'bank_currency' => 'string|min:1|required',
           'bank_name' => 'string|min:1|required',
           'bank_branch' => 'string|min:1|required',
           'bank_address' => 'string|min:1|required',
          'sort_code' => 'string|min:1|required',
            'routine_number'=> 'string|min:1|required',
            'bank_software'=> 'string|min:1|required',
           'swift_code' => 'string|min:1|required',
           'iban_number' => 'string|min:1|required',
           'account_label' => 'string|min:1|required',
        ];
        $data = $request->validate($rules);
        $data['user_id'] = auth()->id();
        return $data;
    }

}
