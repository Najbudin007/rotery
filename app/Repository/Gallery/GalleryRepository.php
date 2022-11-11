<?php

namespace App\Repository\Gallery;

use App\Models\Gallery;
use App\Repository\BaseRepository;
use Illuminate\Support\Str;

class GalleryRepository extends BaseRepository
{
    public function __construct(Gallery $gallery)
    {
        $this->model = $gallery;
    }

    public function create(array $data)
    {
        if (isset($data["file"])) {
            $data["image"] = save_image($data["file"]);
            unset($data["file"]);
        }
        return $this->model->create($data);
    }
    public function update($gal, $data)
    {
        if (isset($data["file"])) {
            $data["image"] = save_image($data["file"]);
            unset($data["file"]);
        }
        $this->model->find($gal->id)->update($data);
    }
    public function deleteGallery($data)
    {
        $d =  $this->model->find($data["id"]);
        $d->delete();
        if ($d["image"]) {
            delete_image($d["image"]);
        }
    }
    public function storeVideo($data)
    {
        $this->model->create($data);
    }
    public function updateVideo($data, $id)
    {
        $this->model->find($id)->update($data);
    }
}
