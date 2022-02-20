<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $fillable = [
        "name", "description_original", "description_premium", "moq","short_description","status"
    ];

    public function catalogue_images() {
        return $this->hasMany(CatalogueImage::class);
    }

    public function catalogue_video() {
        return $this->hasOne(CatalogueVideo::class);
    }
}
