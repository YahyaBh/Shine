<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pets extends Model
{

    protected $fillable = [
        'name',
        'quantity',
        'type',
        'color',
        'image'
    ];


    public function pet()
    {
        return $this->belongsTo(User::class);
        return $this->belongsTo(pets::class);
    }

}
