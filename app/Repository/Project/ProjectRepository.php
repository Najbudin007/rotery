<?php

namespace App\Repository\Project;

use App\Models\Project;
use App\Repository\BaseRepository;
use Illuminate\Support\Str;

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
        $data['slug'] = Str::slug($data['title']);
        $this->model->create($data);
    }
    public function update($proj, $data)
    {
        if (isset($data["image"])) {
            $data["image"] = save_image($data["image"]);
        }
        $data['slug'] = Str::slug($data['title']);

        $this->model->find($proj->id)->update($data);
    }
}
