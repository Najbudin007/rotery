<?php

namespace App\Repository\Project;

use App\Models\Project;
use App\Repository\BaseRepository;

class ProjectRepository extends BaseRepository
{
    public function __construct(Project $project)
    {
        $this->model = $project;
    }
    public function store($data)
    {
        if ($data["image"]) {
            $data["image"] = save_image($data["image"]);
        }
        $this->model->create($data);
    }
    public function update($proj, $data)
    {
        if ($data["image"]) {
            $data["image"] = save_image($data["image"]);
        }
        $this->model->find($proj->id)->update($data);
    }
}
