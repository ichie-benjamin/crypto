<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Trade;
use Illuminate\Http\Request;

class TradesController extends Controller
{
    public function index(Request $request)
    {
        $deposit = [];
        if($request->has('deposit')){
            $id = $request->get('deposit');
            $deposit = Deposit::with('user')->findOrFail($id);
            $trades = Trade::whereDepositId($id)->get();
            $title = ucfirst($deposit->user->name). ' '.$deposit->plan->name .' Trades';
        }else{
            $title = 'All Trades';
            $trades = Trade::all();
        }
        return view('admin.trades.trades-list', compact('trades','title','deposit'));
    }

    public function create()
    {
        return view('admin.trades.trades-list');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        Trade::create($data);
        return redirect()->back()->with('success', 'Trade was successfully added.');
    }


    public function edit($id)
    {
        $trade = Trade::findOrFail($id);
        return view('admin.trades.trades-edit', compact('trade'));
    }

    public function update(Request $request, $id)
    {
        $trades = Trade::findOrFail($id);
        $trades->update($this->getData($request));
        return redirect()->route('admin.trades.index');
    }

    public function destroy($id)
    {
        $trades = Trade::findOrFail($id);
        $trades->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'deposit_id' => 'required',
            'trade_type' => 'required',
            'currency_pair' => 'required',
            'duration' => 'nullable',
            'is_win' => 'nullable',
            'traded_amount' => 'nullable',
            'opening_price' => 'nullable',
            'profit' => 'nullable',
            'closing_price' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
