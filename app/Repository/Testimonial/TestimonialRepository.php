<?php

namespace App\Repository\Testimonial;

use App\Models\Testimonial;
use App\Repository\BaseRepository;
use Illuminate\Support\Str;

class TestimonialRepository extends BaseRepository
{
    public function __construct(Testimonial $testimonial)
    {
        $this->model = $testimonial;
    }

    public function create(array $data)
    {
        if (file($data["image"])) {
            $img = rand() . '.' . $data['image']->getClientOriginalName();
            $data['image']->move(public_path("images"), $img);
            $data['image'] = $img;
        }
        // $data['slug'] = Str::slug($data['title']);
        return $this->model->create($data);
    }
    public function update($id, $data)
    {
        if (isset($data["image"])) {
            $img = rand() . '.' . $data['image']->getClientOriginalName();
            $data['image']->move(public_path("images"), $img);
            $data['image'] = $img;
        }
        // $data['slug'] = Str::slug($data['title']);
        $this->model->find($id)->update($data);
    }
}
