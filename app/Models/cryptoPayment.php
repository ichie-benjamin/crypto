<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cryptoPayment extends Model
{
    use HasFactory;

    protected $fillable = ['name','wallet','logo'];
}
