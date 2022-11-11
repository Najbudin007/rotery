<?php

namespace App\Repository\Gallery;

use App\Models\GalleryFolder;
use App\Repository\BaseRepository;
use Illuminate\Support\Str;

class GalleryFolderRepository extends BaseRepository
{
    public function __construct(GalleryFolder $galleryFolder)
    {
        $this->model = $galleryFolder;
    }

    public function create(array $data)
    {
        $data["slug"] = Str::slug($data["name"]);
        return $this->model->create($data);
    }
    public function update($id, $data)
    {
        $data["slug"] = Str::slug($data["name"]);
        $this->model->find($id)->update($data);
    }
}
