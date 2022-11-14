<?php

namespace App\Repository\Mail;

use App\Models\Mail;
use App\Repository\BaseRepository;
use App\Jobs\SendEmailJob;

class MailRepository extends BaseRepository
{
    public function __construct(Mail $mail)
    {
        $this->model = $mail;
    }
    public function store($data)
    {

        $sentTo = array_unique($data["sent_to"]);
        $data["sent_to"] = $sentTo;
        if (isset($data["files"])) {
            $img = rand() . '.' . $data['files']->getClientOriginalName();
            $data['files']->move(public_path("files"), $img);
            $data['files'] = $img;
        }
        Mail::create($data);
        dispatch(new SendEmailJob($data));
    }
}
