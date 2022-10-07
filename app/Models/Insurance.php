<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'body', 'description', 'model', 'engine', 'transmission', 'cc', 'brand1', 'brand2', 'brand3',
        'brand4', 'brand5', 'brand6', 'brand7', 'brand8', 'brand9', 'brand10', 'brand11',
        'brand12',
    ];
}
