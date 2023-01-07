<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laracasts\flash\flash;



class products extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'name', 
        'stock',
        'brand', 
        'buy_price',
        'sale_price',
        'comment'
    ];
    protected $primaryKey = 'products_id';
}

