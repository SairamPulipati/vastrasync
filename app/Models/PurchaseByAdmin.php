<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseByAdmin extends Model
{
    use HasFactory;

    protected $table = 'purchasebyadmin';

    protected $fillable = [
        'date',
        'supiler',
        'price',
        'item',
        'invoiceNumber',
        'quantity',
        'units',
    ];

    public function supilerdata()
    {
        return $this->hasOne(SuppilerDetails::class, 'id', 'supiler');
    }

    public function productdetails()
    {
        return $this->hasOne(Product::class, 'purchases', 'id');
    }
}
