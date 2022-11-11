<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        "sent_to" => "array",
        "files" => "array"
    ];
}
