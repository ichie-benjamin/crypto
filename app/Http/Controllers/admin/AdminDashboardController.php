<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

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


}
