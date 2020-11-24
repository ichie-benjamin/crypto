<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['user'];

    protected $appends = ['payout','end_time','o_price','c_price'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
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
    
        return $this->profit / $this->traded_amount * 0.1;
    }

    public function getCPriceAttribute()
    {
    
        return $this->profit / $this->traded_amount;
    }

}
