<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finish extends Model
{
    use HasFactory;

    protected $table = 'finishes';

    protected $fillable = ['description', 'price'];
}
