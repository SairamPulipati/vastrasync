<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    protected $table = 'purchasedata';
    public function productdetails()
    {
         return $this->hasone(Purchase:: class, 'id', 'purchaseid');
    }
}
