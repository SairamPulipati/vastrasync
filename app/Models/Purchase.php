<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    protected $fillable = [
        'transcationid',
        'salesman',
        'branch',
        'trns',
        'pos',
        'totalpurchase',
        'discount',
        'partialpay',
        'ispartiallypay',
        'payment2',
        'sessionid',
    ];

    public function purchasedetails()
    {
        return $this->hasMany(PurchaseDetails::class, 'purchaseid', 'id');
    }

    public function customerdetails()
    {
        return $this->hasOne(PurchaseUserDetails::class, 'purchaseid', 'id');
    }

    public function salesmandata()
    {
        return $this->hasOne(User::class, 'id', 'salesman');
    }

    public function branchdata()
    {
        return $this->hasOne(Branch::class, 'id', 'branch');
    }

    public function cashier()
    {
        return $this->hasOne(User::class, 'id', 'pos');
    }

    public function setTotalAttribute()
    {
        return $this->totalpurchase - $this->discount;
    }
}
