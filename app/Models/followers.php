<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followers extends Model
{
    use HasFactory;

    protected $fillable =[
        #defination of table column
        'count'
    ];
}
