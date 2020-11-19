<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateProfile(Request $request){
        $data = $this->getData($request);
        auth()->user()->update($data);
        return redirect()->back()->with('success','Profile Successfully updated');
    }

    public function uploadId(){
        return view('backend.profile.uploadId');
    }

    public function idProcessing(){
        return view('backend.profile.id-processing');
    }

    public function idProceed(){
        return redirect()->route('backend.account.security')->with('success', 'Identify succesfully uploaded, awaiting admin verification');
    }

    public function storeId(Request $request){
        $data = $this->getIdData($request);
        $id = Identity::whereUserId(auth()->id())->first();
        if(!$id){
            Identity::create($data);
        }else {
            $id->update($data);
        }
        return redirect()->route('backend.id.processing');
    }

    protected function getIdData(Request $request)
    {
        $rules = [
            'front' => 'required',
            'back' => 'required',
        ];
        $data = $request->validate($rules);
        $data['user_id'] = auth()->id();
        return $data;
    }

    protected function getData(Request $request)
    {
        $rules = [
            'btc' => 'required',
            'phone'  => 'required',
            'avatar'  => 'nullable',
            'city'  => 'required',
            'country'  => 'required',
            'address'  => 'required',
            'permanent_address'  => 'required',
            'postal'  => 'required',
            'dob'  => 'required',
            'first_name'  => 'required',
            'last_name'  => 'required',
        ];
        $data = $request->validate($rules);
        return $data;
    }
}

