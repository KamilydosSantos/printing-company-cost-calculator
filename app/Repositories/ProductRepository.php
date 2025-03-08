<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
  public function __construct(protected Product $model)
  {
  }

  public function searchByDescription(string $search)
  {
    return $this->model->where('description', 'LIKE', "%{$search}%")->get();
  }
}