<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\WireTransfer;
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

        if (!$withdrawal->processed) {
            return view('backend.withdrawals.processing', compact('withdrawal'));
        }

        if($withdrawal->type == 'account_balance'){
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

        }else {
            if ($withdrawal->approved) {
                return redirect()->route('backend.pending.withdrawal');
            }
            $title = 'Withdrawal ';
            return view('backend.withdrawals.verify', compact('withdrawal', 'title'));
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

        if($data['type'] == 'available_balance') {
            if (auth()->user()->withdrawable < $data['amount']) {
                return redirect()->back()->with('failure', 'You cant withdraw more than your available balance');
            }
        }else{
            if (auth()->user()->balance < $data['amount']) {
                return redirect()->back()->with('failure', 'You cant withdraw more than your account balance');
            }
        }
            $withdrawal = Withdrawal::create($data);

            if($data['type'] == 'available_balance'){
                Transaction::create(['user_id' => auth()->id(), 'amount' => $data['amount'], 'type' => 'Withdrawal', 'account_type' => 'available balance','note' => 'Available balance withdrawal']);
                Auth::user()->withdrawable = Auth::user()->withdrawable - $data['amount'];
            }else{
                Transaction::create(['user_id' => auth()->id(), 'amount' => $data['amount'], 'type' => 'Withdrawal', 'account_type' => 'account balance','note' => 'Account balance withdrawal']);
                Auth::user()->balance = Auth::user()->balance - $data['amount'];
            }
        Auth::user()->save();
        return redirect()->route('backend.withdrawal.processing', $withdrawal->id);
    }

    public function wireStore(Request $request)
    {

            $data = $this->getWireData($request);

        if($data['type'] == 'available_balance') {
            if (auth()->user()->withdrawable < $data['amount']) {
                return redirect()->back()->with('failure', 'You cant withdraw more than your available balance');
            }
        }else{
            if (auth()->user()->balance < $data['amount']) {
                return redirect()->back()->with('failure', 'You cant withdraw more than your account balance');
            }
        }
            $wire = WireTransfer::create($data);
        $data['wallet'] = $wire->id;
            $withdrawal = Withdrawal::create($data);

            if($data['type'] == 'available_balance'){
                Transaction::create(['user_id' => auth()->id(), 'amount' => $data['amount'], 'type' => 'Wire Withdrawal', 'account_type' => 'available balance','note' => 'Available balance wire withdrawal']);
                Auth::user()->withdrawable = Auth::user()->withdrawable - $data['amount'];
            }else{
                Transaction::create(['user_id' => auth()->id(), 'amount' => $data['amount'], 'type' => 'Wire Withdrawal', 'account_type' => 'account balance','note' => 'Account balance wire withdrawal']);
                Auth::user()->balance = Auth::user()->balance - $data['amount'];
            }
        Auth::user()->save();
        return redirect()->route('backend.withdrawal.processing', $withdrawal->id);
    }

    public function bonusWithdraw(Request $request)
    {

            $data = $this->getData($request);

            if (auth()->user()->bonus < $data['amount']) {
                return redirect()->back()->with('failure', 'You cant withdraw more than your bonus balance');
            }

            $withdrawal = Withdrawal::create($data);

                Transaction::create(['user_id' => auth()->id(), 'amount' => $data['amount'], 'type' => 'Withdrawal', 'account_type' => 'bonus balance','note' => 'Bonus balance withdrawal']);

                Auth::user()->bonus = Auth::user()->bonus - $data['amount'];

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

    public function withdraw()
    {
        $withdrawals = Withdrawal::whereUserId(auth()->id())->get();

        return view('backend.withdrawals.withdraw', compact('withdrawals'));
    }

    public function myBonusWithdrawals()
    {
        $withdrawals = Withdrawal::whereUserId(auth()->id())->get();

        return view('backend.withdrawals.bonus.index', compact('withdrawals'));
    }
    public function btcWithdrawal()
    {
        return view('backend.withdrawals.btc');
    }
    public function wireWithdrawal()
    {
        return view('backend.withdrawals.wire');
    }
    public function withdrawBonus()
    {
        return view('backend.withdrawals.bonus');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => 'nullable',
//            'plan_id' => 'required',
            'amount' => 'required',
            'wallet' => 'required',
            'proof' => 'nullable',
            'type' => 'nullable',
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

    protected function getWireData(Request $request)
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
            'type' => 'string|min:1|required',
            'amount' => 'required',
            'method' => 'required',
        ];
        $data = $request->validate($rules);
        $data['user_id'] = auth()->id();
        return $data;
    }

}
