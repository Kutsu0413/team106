<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    const TYPES=[
        1=>"肉",
        2=>"野菜",
        3=>"米",
        4=>"パン",
        5=>"麺類",
    ];
    protected $table = 'items';

}


