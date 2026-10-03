<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseUserDetails extends Model
{
    use HasFactory;

    protected $table = 'purchaseuserdetails';

    protected $fillable = [
        'purchaseid',
        'name',
        'branch',
        'number',
    ];

    public function transcationid()
    {
        return $this->hasOne(Purchase::class, 'id', 'purchaseid');
    }
}
