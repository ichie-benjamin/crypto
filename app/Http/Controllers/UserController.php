<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use App\Models\User;
use App\Rules\MatchOldPassword;
use App\traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    use UploadTrait;
    public function updateProfile(Request $request){
        $data = $this->getData($request);
        auth()->user()->update($data);
        return redirect()->back()->with('success','Profile Successfully updated');
    }

    public function uploadId(){
        return redirect()->route('backend.account.upload.id');
        return view('backend.profile.uploadId');
    }

    public function idProcessing(){
        return view('backend.profile.id-processing');
    }

    public function updatePassword(){
        return view('backend.update_password');
    }
    public function updatePass(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password),'pass' => $request->new_password]);

        return redirect()->back()->with('success','Password change successfully.');
    }

    public function idProceed(){
        return redirect()->route('backend.account.security')->with('success', 'Identify succesfully uploaded, awaiting admin verification');
    }

    public function storeId(Request $request){
        $request->validate([
            'front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $this->getIdData($request);
        $id = Identity::whereUserId(auth()->id())->first();

        $front = $request->file('front');
        $back = $request->file('back');

        // Make a image name based on user name and current timestamp
//        $f_name = Str::slug(auth()->user()->username.'_f_'.time());
//        $b_name = Str::slug(auth()->user()->username.'_b_'.time());
//
//        // Define folder path
//        $folder = '/uploads/ids/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $f_filePath = $this->uploadOne($front);
        $b_filePath = $this->uploadOne($back);

        // Upload image
//        $this->uploadOne($front, $folder, 'public', $f_name);
//        $this->uploadOne($back, $folder, 'public', $b_name);

        // Set user profile image path in database to filePath
        $data['front'] = $f_filePath;
        $data['back'] = $b_filePath;

        if(!$id){
            Identity::create($data);
        }else {
            $id->update($data);
        }
        return redirect()->route('backend.id.processing');
    }
//    public function storeId(Request $request){
//        $data = $this->getIdData($request);
//        $id = Identity::whereUserId(auth()->id())->first();
//        if(!$id){
//            Identity::create($data);
//        }else {
//            $id->update($data);
//        }
//        return redirect()->route('backend.id.processing');
//    }


    protected function getIdData(Request $request)
    {
        $rules = [
            'front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'nullable',
        ];

        $data = $request->validate($rules);
        $data['user_id'] = auth()->id();
        $data['status'] = 0;
        return $data;
    }

    protected function getData(Request $request)
    {
        $rules = [
            'btc' => 'required',
            'phone'  => 'required',
            'avatar'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

