<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $appends = ['commission_fee','tax_fee','cot_fee'];
    protected $fillable = [
        'user_id','processed','commission','tax','cost_of_transfer','commission_proof','tax_proof','cot_proof',
'amount',
'wallet',
'status',
'method',
'approved',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function getCommissionFeeAttribute(){
        $amount = ($this->amount * setting('withdrawal_commission', 20)) / 100;
        return '$'.$amount;
    }
    public function getTaxFeeAttribute(){
        $amount = ($this->amount * setting('withdrawal_tax', 18)) / 100;
        return '$'.$amount;
    }
    public function getCotFeeAttribute(){
        $amount = ($this->amount * setting('withdrawal_cot', 20)) / 100;
        return '$'.$amount;
    }
}
