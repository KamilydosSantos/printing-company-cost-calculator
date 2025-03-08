<?php

namespace App\Repositories;

use App\Models\Finish;

class FinishRepository extends BaseRepository
{
  public function __construct(protected Finish $model)
  {
  }
}