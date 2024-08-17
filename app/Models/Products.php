<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';
    protected $fillable=[
        'name',
        'price',
        'quantity' ,
        'manufaturer',
        'expired_date',
        
    ];
    use HasFactory;
}
