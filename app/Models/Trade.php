<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stephenjude\DefaultModelSorting\Traits\DefaultOrderBy;

class Trade extends Model
{
    use HasFactory, DefaultOrderBy;

    protected static $orderByColumn = 'created_at';


    protected $guarded = [];

    protected $with = ['user','currency'];

    protected $appends = ['payout','end_time','o_price','c_price'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function currency()
    {
        return $this->belongsTo(CurrencyPair::class,'currency_pair','name');
    }

    public function getPayoutAttribute()
    {
        $bonus = $this->traded_amount * ($this->profit / 100);
        return $bonus;
    }

    public function getEndTimeAttribute()
    {

        return $this->created_at->addSeconds($this->duration);
    }

    public function getOPriceAttribute()
    {

        return '$'. $this->traded_amount;
    }

    public function getCPriceAttribute()
    {
        if($this->is_win){
            return  '$'.($this->traded_amount + $this->payout);
        }else {
            return  '$'.($this->traded_amount - $this->payout);
        }
    }

}
