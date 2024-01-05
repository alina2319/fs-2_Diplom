<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'row',
        'seats',
        'price',
        'vip_price',
        'is_active'
    ];

    protected $table = 'hall';
}
