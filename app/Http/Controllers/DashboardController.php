<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Identity;
use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
//        if(!auth()->user()->btc){
//            return redirect()->route('backend.profile.edit')->with('failure','Complete your profile to continue');
//        }
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
        $deposits = Deposit::whereUserId(auth()->id())->get();
        if(count($deposits) > 0){
            $deposit = Deposit::whereUserId(auth()->id())->latest()->first();
        }else{
            $deposit = null;
        }
        return view('backend.transactions', compact('deposits','deposit'));
    }

    public function viewDeposit($id){
        $deposit = Deposit::findOrFail($id);

        return view('backend.deposit.view', compact('deposit'));
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
