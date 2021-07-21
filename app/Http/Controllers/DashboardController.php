<?php

namespace App\Http\Controllers;

use App\Models\AutoTrader;
use App\Models\Deposit;
use App\Models\Identity;
use App\Models\Setting;
use App\Models\Trade;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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
           if(setting('autotrader') && !auth()->user()->manager_id){
               return  redirect()->route('backend.autotraders')->with('error','Connect your account with Auto Trader');
           }

        if(auth()->user()->identity){
            if(!auth()->user()->identity->front){
                return redirect()->route('backend.profile.upload.id')->with('failure','Upload means of identification');
            }
        }else{
            Identity::create(['user_id' => auth()->id()]);
        }

//        $trades = Trade::whereUserId(auth()->id())->get();
        $trades = [];
        $deposits = Deposit::whereUserId(auth()->id())->get();

       $theme = $this->theme();

        return view('backend.dashboard',compact('trades','deposits','theme'));
    }
    private function theme(){
        if (isset($_COOKIE['themecolor'])) {
            $newTheme = $_COOKIE['themecolor'];
            if($newTheme == 'dark-alt'){
                return 'dark';
            }else if($newTheme == 'dark'){
                return 'dark';
            }else if($newTheme == 'semi-dark'){
                return 'light';
            }else if($newTheme == 'semi-dark-alt'){
                return 'dark';
            }
        }else {
            return 'dark';
        }
    }
    public function overview(){
        if(!auth()->user()->btc){
            return redirect()->route('backend.profile.edit')->with('failure','Complete your profile to continue');
        }
        $deposits = Deposit::whereUserId(auth()->id())->get();
        $trades = Trade::whereUserId(auth()->id())->get();
        return view('backend.overview', compact('trades','deposits'));
    }
    public function autotraders(){
        $traders = AutoTrader::all();
        return view('backend.autotraders', compact('traders'));
    }

    public function connectAutoTraders($id){
        $trader = AutoTrader::findOrFail($id);
        if($trader->fee > auth()->user()->balance){
            return redirect()->back()->with('fund','Insufficient balance, pls fund account wallet to continue');
        }
        if(auth()->user()->manager_id != $id){
            $user = auth()->user();
            $user->balance = $user->balance - (int)$trader->fee;
            $user->manager_id = $id;
            $user->save();
            Transaction::create(['user_id' => $user->id, 'amount' => (int)$trader->fee, 'type' => 'debit', 'account_type' => 'balance','note' => 'Account manager payment']);
            return  redirect()->route('backend.dashboard')->with('success', 'Account successfully connected to Auto Trader');
        }else{
            return redirect()->back()->with('error','You are already connected to this Auto trader');
        }

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

        $trades = [
            [],[],[]
        ];

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
