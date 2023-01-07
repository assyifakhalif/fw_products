<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(products::class, 'products_id', 'products_id');
    }
    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'supplier_id', 'supplier_id');
    }
}
