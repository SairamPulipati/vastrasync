<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posproduct extends Model
{
    use HasFactory;

    protected $table = 'posproducts';

    protected $fillable = [
        'tempid',
        'productid',
        'price',
        'quantity',
    ];

    public function productdetails()
    {
        return $this->hasOne(Product::class, 'id', 'productid');
    }

    public function setTotalAttribute()
    {
        return $this->attributes['total'] = $this->quantity * $this->price;
    }
}
