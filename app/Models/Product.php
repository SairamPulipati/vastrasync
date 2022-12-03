<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function purchasedetails(){
        return $this->hasmany(PurchaseByAdmin:: class, 'id', 'purchases');
    }
    public function purchasedprice(){
                return $this->hasone(PurchaseByAdmin:: class, 'id', 'purchases');

    }
    public function branchesdata()
    {
        return $this->hasmany(Branchproduct:: class, 'productid', 'id');
    }
    public function setTotalAttribute()
    {
        return $this->attributes['total'] = $this->quantity * $this->price;
    }
}
