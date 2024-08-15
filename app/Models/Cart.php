<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'customer_id',
        'name',
        'value',
        'token_pay',
        'status',
        'license'
    ];
}
