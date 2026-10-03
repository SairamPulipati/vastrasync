<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;

    protected $table = 'purchasedata';

    protected $fillable = [
        'purchaseid',
        'product_id',
        'purchasedprice',
        'quantity',
        'paymentmode',
    ];

    public function productdetails()
    {
        return $this->hasOne(Purchase::class, 'id', 'purchaseid');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
