<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Currency;
use App\Models\Deposit;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class DepositsController extends Controller
{

    public function index()
    {
        $deposits = Deposit::with('user','currency','account')->paginate(25);

        return view('deposits.index', compact('deposits'));
    }

    public function purchase($id)
    {
        $package = Package::findOrFail($id);
        return view('backend.deposit.purchase', compact('package'));
    }

    public function depositFund()
    {
        if(auth()->user()->can_upgrade){
            return redirect()->route('backend.deposit.fund')->with('message','Purchase a plan');
        }
        return view('backend.deposit.fund.1');
    }

    public function depositProof()
    {
        return view('backend.deposit.fund.3');
    }

    public function depositFundUpload()
    {
        return view('backend.deposit.fund.2');
    }


    public function proof($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('backend.deposit.proof', compact('deposit'));
    }


    public function create()
    {
        if(!auth()->user()->can_upgrade){
            return redirect()->route('backend.deposit.fund');
        }
        $packages = Package::all();

        return view('backend.deposit.create', compact('packages'));
    }

    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
//            $package = Package::findOrFail($data['plan_id']);

            $deposit = Deposit::create($data);

            return redirect()->route('backend.deposit.view',$deposit->id)
                ->with('success', 'Deposit Proof was successfully uploaded.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function depositStore(Request $request)
    {
            $data = $this->getData($request);

            $deposit = Deposit::create($data);

        $package = Package::findOrFail($data['plan_id']);
        if($package->minimum_purchase > $data['amount']){
            return redirect()->back()->withInput()->with('failure', 'Minimum deposit for this package is '.$package->minimum_purchase);
        }
        if($package->maximum_purchase < $data['amount']){
            return redirect()->back()->withInput()->with('failure', 'Maximum deposit for this package is '.$package->maximum_purchase);
        }


        return redirect()->route('backend.deposits.proof',$deposit->id)->with('success', 'Upload payment proof');

    }

    public function dStore(Request $request)
    {
            $data = $this->getData($request);

            $deposit = Deposit::create($data);

            return redirect()->route('backend.deposits.proof',$deposit->id)->with('success', 'Upload payment proof');

    }

    public function show($id)
    {
        $deposit = Deposit::with('user','currency','account')->findOrFail($id);

//        return view('deposits.show', compact('deposit'));
    }

    public function edit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $users = User::pluck('username','id')->all();
$currencies = Currency::pluck('id','id')->all();
$accounts = Account::pluck('id','id')->all();

//        return view('deposits.edit', compact('deposit','users','currencies','accounts'));
    }

    public function update($id, Request $request)
    {

            $data = $this->getUData($request);

            $deposit = Deposit::findOrFail($id);

            $deposit->update($data);

            return redirect()->route('backend.deposit.view',$id)
                ->with('success', 'Deposit Proof was successfully uploaded.');
    }

    public function destroy($id)
    {
        try {
            $deposit = Deposit::findOrFail($id);
            $deposit->delete();

            return redirect()->route('deposits.deposit.index')
                ->with('success_message', 'Deposit was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    protected function getData(Request $request)
    {
        $rules = [
                'user_id' => 'nullable',
            'plan_id' => 'nullable',
            'amount' => 'required',
            'proof' => 'nullable',
            'promo_code' => 'string|nullable',
            'payment_method' => 'string|min:1|nullable',
        ];

        $data = $request->validate($rules);
        $data['user_id'] = auth()->id();
        $data['plan_id'] = $request['plan_id'] ?? null;
        $data['payment_method'] = $data['payment_method'] ?? 'Bitcoin';
        return $data;
    }
    protected function getUData(Request $request)
    {
        $rules = [
            'proof' => 'string|required',
        ];

        $data = $request->validate($rules);

        return $data;
    }

}
