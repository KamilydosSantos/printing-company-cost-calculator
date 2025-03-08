<?php

namespace App\Repositories;

class BaseRepository
{
  public function getAll()
  {
    return $this->model->get();
  }

  public function getAttributesById(array $attributes, int $id)
  {
    return $this->model->select($attributes)
      ->where('id', $id)
      ->first();
  }

  public function getById(int $id)
  {
    return $this->model->find($id);
  }

  public function store(array $data)
  {
    return $this->model->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->model->where('id', $id)->update($data);
  }

  public function delete(int $id)
  {
    return $this->model->where('id', $id)->delete();
  }
}