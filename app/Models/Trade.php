<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['user'];

//    protected $appends = ['profit'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
//    public function getProfitAttribute()
//    {
//        return $this->sell_at - $this->buy_at;
//    }
}
