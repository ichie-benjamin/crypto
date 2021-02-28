<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Withdrawal;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    public function index()
    {
        $deposits = Withdrawal::whereUserId();

        return view('deposits.index', compact('deposits'));
    }
    public function pendingWithdrawal()
    {
        $withdrawals = Withdrawal::whereUserId(auth()->id())->get();

        return view('backend.withdrawals.pending', compact('withdrawals'));
    }


    public function processing($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);

        if(!$withdrawal->processed){
            return view('backend.withdrawals.processing', compact('withdrawal'));
        }
        if(!$withdrawal->commission_proof){
            return view('backend.withdrawals.commission', compact('withdrawal'));
        }
        if(!$withdrawal->tax_proof){
            if(!$withdrawal->commission){
                $title = 'Commission Fee';
                return view('backend.withdrawals.verify', compact('withdrawal','title'));
            }
            return view('backend.withdrawals.tax', compact('withdrawal'));
        }
        if(!$withdrawal->cot_proof){
            if(!$withdrawal->tax){
                $title = 'Tax Fee';
                return view('backend.withdrawals.verify', compact('withdrawal','title'));
            }
            return view('backend.withdrawals.cot', compact('withdrawal'));
        }
        if(!$withdrawal->cost_of_transfer){
           $title = 'Cost of Transfer';
            return view('backend.withdrawals.verify', compact('withdrawal','title'));
        }
        if($withdrawal->cost_of_transfer){
            if($withdrawal->approved){
                return redirect()->route('backend.pending.withdrawal');
            }
            $title = 'Withdrawal ';
            return view('backend.withdrawals.verify', compact('withdrawal','title'));
        }
    }
    public function processed(Request $request, $id)
    {
        $withdrawal = Withdrawal::findOrFail($id);

        $withdrawal->processed = true;

        $withdrawal->save();

        return redirect()->route('backend.withdrawal.processing', $withdrawal->id)->with('success', 'Transfer pending');

    }

    public function verify(Request $request, $id)
    {
        $withdrawal = Withdrawal::findOrFail($id);

        return view('backend.withdrawals.verify', compact('withdrawal'));

//        return redirect()->route('backend.withdrawal.processing', $withdrawal->id)->with('success', 'Transfer pending');

    }



    public function store(Request $request)
    {

            $data = $this->getData($request);

            if(auth()->user()->balance < $data['amount']){
                return redirect()->back()->with('failure', 'You cant withdraw more than your current balance');
            }

            $withdrawal = Withdrawal::create($data);
          Transaction::create(['user_id' => auth()->id(), 'amount' => $data['amount'], 'type' => 'Withdrawal', 'account_type' => 'balance','note' => 'Account balance withdrawal']);
        Auth::user()->balance = Auth::user()->balance - $data['amount'];
        Auth::user()->save();
        return redirect()->route('backend.withdrawal.processing', $withdrawal->id);
    }


    public function update(Request $request, $id)
    {

        $data = $this->getUData($request);

        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->update($data);

            return redirect()->route('backend.withdrawal.processing', $withdrawal->id);
    }


    public function myWithdrawals()
    {
        $withdrawals = Withdrawal::whereUserId(auth()->id())->get();

        return view('backend.withdrawals.index', compact('withdrawals'));
    }
    public function btcWithdrawal()
    {
        return view('backend.withdrawals.btc');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => 'nullable',
//            'plan_id' => 'required',
            'amount' => 'required',
            'wallet' => 'required',
            'proof' => 'nullable',
            'promo_code' => 'string|nullable',
            'method' => 'string|required',
        ];

        $data = $request->validate($rules);
        $data['user_id'] = auth()->id();
        return $data;
    }
    protected function getUData(Request $request)
    {
        $rules = [
            'commission_proof' => 'nullable',
            'tax_proof' => 'nullable',
            'cot_proof' => 'nullable',
            'promo_code' => 'nullable',
//            'method' => 'string|required',
        ];

        return $request->validate($rules);
//        return $data;
    }
}
