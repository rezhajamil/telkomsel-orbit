<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tap_id',
        'nama',
        'telepon',
        'alamat',
        'produk',
    ];

    public function tap()
    {
        return $this->belongsTo(Tap::class, 'tap_id');
    }
}
