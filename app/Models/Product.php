<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'unit',
        'alert',
        'category',
        'brand',
        'barcode',
        'tax',
        'purchases',
        'type',
        'price',
        'image',
        'branch',
        'productSize',
        'description',
        'customizeid',
        'isactive',
    ];

    public function purchasedetails()
    {
        return $this->hasMany(PurchaseByAdmin::class, 'id', 'purchases');
    }

    public function purchasedprice()
    {
        return $this->hasOne(PurchaseByAdmin::class, 'id', 'purchases');
    }

    public function branchesdata()
    {
        return $this->hasMany(Branchproduct::class, 'productid', 'id');
    }

    public function categoryData()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    public function brandData()
    {
        return $this->belongsTo(Brands::class, 'brand', 'id');
    }

    public function setTotalAttribute()
    {
        return $this->attributes['total'] = $this->quantity * $this->price;
    }
}
