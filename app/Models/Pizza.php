<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    //converting array to json to store it in db
    protected $casts = [
        'toppings'=>'array'
    ];
}
