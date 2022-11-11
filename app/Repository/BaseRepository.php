<?php

namespace App\Repository;

class BaseRepository
{
    protected $model;

    public function getAll()
    {
        return $this->model->latest()->get();
    }
    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $attributes)
    {

        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $data = $this->model->findOrFail($id);
        $data->update($attributes);
        return $data;
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();

        return true;
    }
}
