<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'packages';

    protected $appends = ['price'];

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
                  'name',
                  'description',
                  'percent_profit',
                  'period',
                  'minimum_purchase',
                  'maximum_purchase',
                  'status'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];


    protected $casts = [];


    public function getPriceAttribute(){
        return  $this->minimum_purchase.' - '.$this->maximum_purchase .' USD';
    }

    public function totalReturn(){
        return $this->period * $this->percent_profit;
    }


}
