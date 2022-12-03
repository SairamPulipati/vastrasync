<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseUserDetails extends Model
{
    use HasFactory;
    protected $table = 'purchaseuserdetails';
    public function transcationid()
    {
        return $this->hasone(Purchase::class, 'id', 'purchaseid');
    }
}
