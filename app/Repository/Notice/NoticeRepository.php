<?php

namespace App\Repository\Notice;

use App\Models\Notice;
use App\Repository\BaseRepository;
use Illuminate\Support\Str;

class NoticeRepository extends BaseRepository
{
    public function __construct(Notice $notice)
    {
        $this->model = $notice;
    }

    public function create(array $data)
    {


        if (isset($data["image"])) {
            $img = rand() . '.' . $data['image']->getClientOriginalName();
            $data['image']->move(public_path("images"), $img);
            $data['image'] = $img;
        }
        $data['slug'] = Str::slug($data['title']);
        return $this->model->create($data);
    }
    public function update($id, $data)
    {
        if (isset($data["image"])) {
            $img = rand() . '.' . $data['image']->getClientOriginalName();
            $data['image']->move(public_path("images"), $img);
            $data['image'] = $img;
        }
        $data['slug'] = Str::slug($data['title']);
        $this->model->find($id)->update($data);
    }
}
