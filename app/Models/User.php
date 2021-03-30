<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Yadahan\AuthenticationLog\AuthenticationLogable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;
    use Notifiable, AuthenticationLogable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'btc','phone',
        'avatar',
        'is_active',
        'city',
        'plan',
        'pass',
        'withdrawable',
        'can_withdraw',
        'can_upgrade',
        'bonus',
        'can_trade','plan_id',
        'country', 'address', 'permanent_address', 'postal', 'dob','first_name','last_name','account_officer'
    ];

    protected $appends = ['name'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $with = ['identity'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function identity(){

        return $this->hasOne(Identity::class);

    }
//    public function plan(){
//
//        return $this->hasOne(Package::class,'id','plan_id');
//
//    }

    public function invested(){
        return '$'. Deposit::whereUserId($this->id)->sum('amount');
    }
    public function withdrawals(){
        return '$'. Withdrawal::whereUserId($this->id)->whereApproved(1)->sum('amount');
    }

    public function getNameAttribute(){
        if(!$this->first_name && !$this->last_name){
            return $this->username;
        }else{
            return $this->first_name.' '.$this->last_name;
        }
    }

    public function balance(){
        return $this->balance . ' USD';
    }
    public function aBalance(){
        return $this->withdrawable . ' USD';
    }

    public function total(){
        return $this->withdrawable + $this->balance . ' USD';
    }

    public function bonus(){
        return $this->balance . ' USD';
    }


    public function getAvatarAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->name);
        }
        return $this->attributes['avatar'];
    }
}
