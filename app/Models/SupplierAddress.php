<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SupplierAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'zip_code',
        'state',
        'city',
        'neighborhood',
        'street',
        'number',
    ];

    public function supplier():BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
