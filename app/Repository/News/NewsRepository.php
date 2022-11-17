<?php

namespace App\Repository\News;

use App\Models\News;
use App\Repository\BaseRepository;
use Illuminate\Support\Str;

class NewsRepository extends BaseRepository
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }

    public function create(array $data)
    {
        if (isset($data["image"])) {

            $data['image'] = save_image($data["image"]);
        }
        $files = [];
        if (isset($data["files"])) {
            foreach ($data["files"] as $key => $file) {
                $files[$key] = save_document($file);
            }
            $data["files"] = $files;
        }
        $data['slug'] = Str::slug($data['title']);
        return $this->model->create($data);
    }
    
    public function update($news, $data)
    {
        if (isset($data["image"])) {
            $img = rand() . '.' . $data['image']->getClientOriginalName();
            $data['image']->move(public_path("images"), $img);
            $data['image'] = $img;
        }
        
        $d = [];

        if (isset($data["files"])) {
            foreach ($data["files"] as $key => $file) {
                $d[$key] = save_document($file);
            }
            $data["files"] = array_merge($news["files"], $d);
        }
        $data['slug'] = Str::slug($data['title']);
        $this->model->find($news->id)->update($data);
    }

    public function deleteFile($id)
    {
        $news = $this->model->find($id);
        $new = array_filter($news["files"], function ($file) {
            return $file !== request()->fileName;
        });

        $news["files"] = $new;
        $news->update();
    }
}
