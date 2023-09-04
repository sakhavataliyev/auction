<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotCategory extends Model
{
    use HasFactory;


    protected $fillable = [
        'lot_id',
        'category_id'
    ];

    
}