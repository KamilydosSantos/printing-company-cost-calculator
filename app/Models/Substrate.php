<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Substrate extends Model
{
    use HasFactory;

    protected $table = 'substrates';

    protected $fillable = ['description', 'price', 'width', 'height'];
}
