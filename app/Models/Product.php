<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['color_id', 'substrate_id', 'description', 'pages', 'width', 'height'];

    public function colors()
    {
        return $this->hasMany(Color::class);
    }

    public function substrates()
    {
        return $this->hasMany(Substrate::class);
    }
}
