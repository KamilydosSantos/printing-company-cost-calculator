<?php

namespace App\Repositories;

use App\Models\Substrate;

class SubstrateRepository extends BaseRepository
{
  public function __construct(protected Substrate $model)
  {
  }
}