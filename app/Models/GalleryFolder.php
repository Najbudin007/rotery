<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryFolder extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function images()
    {
        return $this->hasMany(Gallery::class)->where('type', 'image');
    }
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
    public function videos()
    {
        return $this->hasMany(Gallery::class)->where('type', 'video');
    }
}
