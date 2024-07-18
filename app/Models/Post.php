<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    const PUBLISHED="published";
    const DRAFT="draft";
    const PENDING="pending";

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageUrlAttribute()
    {
        return isset($this->image) ?  $this->image : 'landing/img/404-picture-not-found.jpg';
    }

    public function getImageSmallUrlAttribute()
    {
        $image = basename($this->image);
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $image = pathinfo($image, PATHINFO_FILENAME);
        $dir = dirname($this->image);
        return isset($this->image) ?   $dir.'/'.$image.'-small.'.$extension  : 'landing/img/404-picture-not-found.jpg';
    }

    public function getImageMediumUrlAttribute()
    {
        $image = basename($this->image);
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $image = pathinfo($image, PATHINFO_FILENAME);
        $dir = dirname($this->image);
        return isset($this->image) ?   $dir.'/'.$image.'-medium.'.$extension  : 'landing/img/404-picture-not-found.jpg';
    }

    public function getImageCroppedUrlAttribute()
    {
        $image = basename($this->image);
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $image = pathinfo($image, PATHINFO_FILENAME);
        $dir = dirname($this->image);
        return isset($this->image) ?   $dir.'/'.$image.'-cropped.'.$extension  : 'landing/img/404-picture-not-found.jpg';
    }
}
