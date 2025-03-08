<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductFinishing extends Model
{
    use HasFactory;

    protected $table = 'finish_products';

    protected $fillable = ['product_id', 'finish_id'];

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function finish()
    {
        return $this->hasOne(Finish::class);
    }
}
