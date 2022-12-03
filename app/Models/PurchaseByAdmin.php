<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseByAdmin extends Model
{
    use HasFactory;
    protected $table = 'purchasebyadmin';
    public function supilerdata()
    {
        return $this->hasone(SuppilerDetails::class, 'id', 'supiler');
    }
    public function productdetails()
    {
        return $this->hasone(Product::class, 'purchases', 'id');
    }
}
