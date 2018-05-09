<?php

namespace App;

use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    const MAX_SIZE = 100;

    protected $fillable = ['title', 'slug', 'text_preview', 'full_text', 'image_preview'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) );
    }

    public function getImagePreviewAttribute($value)
    {
        if (empty($value)) {
            return false;
        }

        $img = Image::make(public_path('images\\' . $value));

        $height = self::MAX_SIZE;
        $width = null;

        if ($img->width() > $img->height()) {
            $width = self::MAX_SIZE;
            $height = null;
        }

        return $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->encode('data-url');
    }

}
