<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Identity;
use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function gateway($gateway)
    {

        return redirect()->back()->with('failure', "$gateway is not active for your account, contact admin to use this payment method");

    }
        public function dashboard(){
//        if(!auth()->user()->btc){
//            return redirect()->route('backend.profile.edit')->with('failure','Complete your profile to continue');
//        }

        if(auth()->user()->identity){
            if(!auth()->user()->identity->front){
                return redirect()->route('backend.profile.upload.id')->with('failure','Upload means of identification');
            }
        }else{
            Identity::create(['user_id' => auth()->id()]);
        }

        $trades = Trade::whereUserId(auth()->id())->get();
        $deposits = Deposit::whereUserId(auth()->id())->get();

        return view('backend.dashboard',compact('trades','deposits'));
    }
    public function overview(){
        if(!auth()->user()->btc){
            return redirect()->route('backend.profile.edit')->with('failure','Complete your profile to continue');
        }
        $deposits = Deposit::whereUserId(auth()->id())->get();
        $trades = Trade::whereUserId(auth()->id())->get();
        return view('backend.overview', compact('trades','deposits'));
    }

    public function loginLogs(){
        $details = Auth::user()->authentications;
        return view('backend.logins', compact('details'));
    }

    public function transactions(){
        $deposits = Deposit::whereUserId(auth()->id())->latest()->get();
//        if(count($deposits) > 0){
////            $deposit = Deposit::whereUserId(auth()->id())->latest()->first();
//        }else{
//            $deposit = null;
//        }
        return view('backend.transactions', compact('deposits'));
    }

    public function pendingDeposits(){
        $deposits = Deposit::whereUserId(auth()->id())->where('status',0)->get();

        return view('backend.deposit.pending', compact('deposits'));
    }

    public function viewDeposit($id){
        $deposit = Deposit::findOrFail($id);
        $deposits = Deposit::whereUserId(auth()->id())->get();
        return view('backend.deposit.view', compact('deposit','deposits'));
    }

    public function editProfile(){
        return view('backend.profile.edit');
    }

    public function myTrades()
    {
        $trades = Trade::whereUserId(auth()->id())->get();

        return view('backend.trades.index', compact('trades'));
    }
    public function security()
    {
        if(auth()->user()->identity){
            if(!auth()->user()->identity->front){
                return redirect()->route('backend.profile.upload.id')->with('failure','Upload means of identification');
            }
        }else{
            Identity::create(['user_id' => auth()->id()]);
        }

        return view('backend.security');
    }

    public function uploadId(){
        return view('backend.uploadId');
    }

}
