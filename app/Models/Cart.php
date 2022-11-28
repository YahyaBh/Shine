<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'user_id',
        'name',
        'type',
        'color',
        'quantity',
        'image'
    ];


    public function cart()
    {
        return $this->hasMany(pets::class);
    }
}
