<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Package;
use App\Models\User;
use App\Notifications\SendProof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{
    public function index(){
//        $today_employers =  $users = User::whereRoleIs('employer')->whereDate('created_at', Carbon::today())->count();
        $users =  $users = User::whereRoleIs('users')->count();
        $a_deposits =  Deposit::whereStatus(1)->count();
        $p_deposits =  Deposit::whereStatus(0)->count();
        $packages =  Package::count();
//
//        $l_jobseekers = $users = User::whereRoleIs('jobseeker')->latest()->limit('5')->get();

        $data =
            [
                'users' => $users,
                'a_deposits' => $a_deposits,
                'p_deposits' => $p_deposits,
                'packages' => $packages,
            ];


        return view('admin.index',$data);
    }

    public function sendProof(){
        return view('admin.users.send_proof');
    }

    public function mailProof(Request $request){
        $data = $request->all();
        $data['batch'] = Str::random(60);;
        Notification::route('mail', $data['email'])->notify(new SendProof($data));
        return redirect()->back()->with('success', 'Fast payment proof successfully sent, pls check your inbox or spam folder');
    }

}
