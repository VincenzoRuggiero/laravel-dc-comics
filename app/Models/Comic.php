<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // Bonus 2 - Declaring fillable array with values that will be used inside
    // ComicController's 'store' method
    protected $fillable = array('title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type');
}
