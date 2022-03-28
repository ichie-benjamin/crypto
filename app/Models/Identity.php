<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getStatusAttribute($value)
    {
        if($value){
            return 'approved';
        }else{
            return 'pending';
        }
    }
    public function getFrontAttribute($value)
    {
//        if($value){
//            return asset('storage/'.$value);
//        }
//        return null;
        return $value;
    }
    public function getBackAttribute($value)
    {
//        if($value){
//            return asset('storage/'.$value);
//        }
//        return null;
        return $value;
    }
}
