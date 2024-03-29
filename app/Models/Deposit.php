<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deposits';

    protected $with = [];

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_id',
                  'plan_id',
                  'amount','proof',
                  'promo_code',
                  'message',
                  'status',
                  'payment_method'
              ];

    protected $dates = [];

    protected $casts = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }


    public function amount()
    {
        return $this->amount . ' '. setting('currency');
    }



    public function plan()
    {
        return $this->belongsTo(Package::class,'plan_id');
    }

    public function account()
    {
        return $this->belongsTo('App\Models\Account','account_id');
    }

    public function getProofAttribute($value)
    {
//        if($value){
//            return asset('storage/'.$value);
//        }
//        return null;
        return $value;
    }

}
