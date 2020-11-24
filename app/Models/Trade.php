<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['user'];

    protected $appends = ['payout'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function getPayoutAttribute()
    {
        $bonus = $this->traded_amount * ($this->profit / 100);
        return $bonus + $this->traded_amount;
    }
}
