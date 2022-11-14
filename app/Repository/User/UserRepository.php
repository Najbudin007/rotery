<?php

namespace App\Repository\User;

use App\Models\User;
use App\Models\UserRole;
use App\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function store($data)
    {
        if (file($data["image"])) {
            $img = rand() . '.' . $data['image']->getClientOriginalName();
            $data['image']->move(public_path("profile"), $img);
            $data['image'] = $img;
        }
        $this->model->create($data)->id;
    }
    public function update($user, array $data)
    {
        if(isset($data["image"])) {
            if (file($data["image"])) {
                $img = rand() . '.' . $data['image']->getClientOriginalName();
                $data['image']->move(public_path("profile"), $img);
                $data['image'] = $img;
            }
        }
        if ($data["password"] !== "") {
            $data["password"] = bcrypt($data["password"]);
        }
        $this->model->find($user->id)->update($data);
    }
}
