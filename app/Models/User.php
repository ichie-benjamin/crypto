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
        'city',
        'country', 'address', 'permanent_address', 'postal', 'dob','first_name','last_name'
    ];

    protected $appends = ['name','balance'];

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

    public function getBalanceAttribute(){
       return 0.00;
    }


    public function getAvatarAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->name);
        }
        return $this->attributes['profile_image'];
    }
}
