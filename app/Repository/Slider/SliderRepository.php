<?php

namespace App\Repository\Slider;

use App\Models\Slider;
use App\Repository\BaseRepository;
use Illuminate\Support\Str;

class SliderRepository extends BaseRepository
{
    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }

    public function create(array $data)
    {
        if (file($data["image"])) {
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
