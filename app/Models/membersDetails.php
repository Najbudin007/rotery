<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membersDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        "residence" => "array",
        "business" => "array",
        "others" => "array",
        "alternate_address" => "array",
    ];
}
