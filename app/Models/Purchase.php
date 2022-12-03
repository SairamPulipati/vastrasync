<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table = 'purchases';
    public function purchasedetails()
    {
        return $this->hasmany(PurchaseDetails::class, 'purchaseid', 'id');
    }
    public function customerdetails()
    {
        return $this->hasone(PurchaseUserDetails::class, 'purchaseid', 'id');
    }
    public function salesmandata()
    {
        return $this->hasone(User::class, 'id', 'salesman');
    }
    public function branchdata()
    {
        return $this->hasone(Branch::class, 'id', 'branch');
        // return 1;
        // return $this->hasone(User::class, 'id', 'salesman');
    }
    public function setTotalAttribute()
    {
        return $this->totalpurchase - $this->discount;
    }
    // public function PurchasesCount()
    // {
    //     return $this->hasone(PurchaseUserDetails::class, 'purchaseid', 'id');
    // }
}
