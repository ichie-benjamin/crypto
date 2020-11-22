<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Package;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class PackagesController extends Controller
{

    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.packages-list', compact('packages'));
    }

    public function create()
    {
       return view('admin.packages.packages-list');
    }

    public function allDeposits(Request $request){
        if($request->has('status')){
            $status = $request->get('status');
            if($status){
                $title = 'Approved Deposits';
            }else{
                $title = 'Pending Deposits';
            }
            $deposits = Deposit::with('user')->whereStatus($status)->latest()->get();
        }else{
            $title = "All Deposit";
            $deposits = Deposit::with('user')->latest()->get();
        }

        return view('admin.packages.purchased', compact('deposits','title'));
    }

    public function allWithdrawals(Request $request){
        if($request->has('status')){
            $status = $request->get('status');
            if($status){
                $title = 'Approved Withdrawals';
            }else{
                $title = 'Pending Withdrawals';
            }
            $withdrawals = Withdrawal::with('user')->whereStatus($status)->latest()->get();
        }else{
            $title = "All Withdrawals";
            $withdrawals = Withdrawal::with('user')->latest()->get();
        }

        return view('admin.withdrawals', compact('withdrawals','title'));
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        Package::create($data);
        return redirect()->route('admin.packages.index')->with('success', 'Package was successfully added.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.packages-edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $packages = Package::findOrFail($id);
        $packages->update($this->getData($request));
        return redirect()->route('admin.packages.index');
    }

    public function destroy($id)
    {
       $packages = Package::findOrFail($id);
       $packages->delete();
       return redirect()->back();
    }

    public function destroyDeposit($id)
    {
       $deposit = Deposit::findOrFail($id);
       $deposit->delete();
       return redirect()->back()->with('success', 'Successfully Deleted');
    }
    public function approve($id)
    {
       $deposit = Deposit::findOrFail($id);
       $deposit->status = !$deposit->status;
       $deposit->save();
       return redirect()->back()->with('success', 'Successfully Updated State');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'string|min:1|max:255|required',
            'description' => 'nullable',
            'percent_profit' => 'integer|min:1|required',
            'period' => 'integer|min:1|required',
            'minimum_purchase' => 'integer|min:1|required',
            'maximum_purchase' => 'integer|min:1|required',
            'status' => 'boolean|nullable',
        ];
        return $request->validate($rules);
    }
}
