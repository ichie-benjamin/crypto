<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Trade;
use App\Models\User;
use Illuminate\Http\Request;

class TradesController extends Controller
{
    public function index(Request $request)
    {
        $user = [];
        if($request->has('user')){
            $id = $request->get('user');
            $user = User::findOrFail($id);
            $trades = Trade::whereUserId($id)->get();
            $title = 'Trade For '. ucfirst($user->name);
        }else{
            $title = 'All Trades';
            $trades = Trade::all();
        }
        return view('admin.trades.trades-list', compact('trades','title','user'));
    }

    public function create()
    {
        return view('admin.trades.trades-list');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        $user = User::findOrFail($data['user_id']);

        if($user->balance < $data['traded_amount']){
            return redirect()->back()->with('failure', "You cant trade more than $user->balance");
        }


        $trade = Trade::create($data);
        if($trade->is_win){
            $user->balance = $user->balance + $trade->payout;
            $user->save();
        }else{
            $user->balance = $user->balance - $trade->traded_amount;
            $user->save();
        }

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
            'deposit_id' => 'nullable',
            'trade_type' => 'required',
            'currency_pair' => 'required',
            'duration' => 'nullable',
            'is_win' => 'nullable',
            'traded_amount' => 'nullable',
    
            'profit' => 'nullable',
    
        ];

        $data = $request->validate($rules);
        $data['deposit_id'] = auth()->user()->id;
        return $data;
    }
}
