<?php

namespace App\Repositories;

use App\Models\Color;

class ColorRepository extends BaseRepository
{
  public function __construct(protected Color $model)
  {
  }
}