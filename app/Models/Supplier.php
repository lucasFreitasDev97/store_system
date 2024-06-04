<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'register_code',
      'email',
      'phone',
    ];

    public function suplierAddress(): HasOne
    {
        return $this->hasOne(SupplierAddress::class, 'supplier_id');
    }
}
