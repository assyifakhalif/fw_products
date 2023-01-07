<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = [
        'name', 
        'name_company',
        'address', 
        'contact',
        'telp',
        'information'
    ];
    protected $primaryKey = 'supplier_id';
}