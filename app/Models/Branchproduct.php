<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchproduct extends Model
{
    use HasFactory;

    protected $table = 'branchproducts';

    protected $fillable = [
        'branchid',
        'productid',
        'isactive',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branchid', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productid', 'id');
    }
}
