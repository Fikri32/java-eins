<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $fillable = [
        "name", "description", "moq","quality","standart",
        "calorie","mousture","ash","carbon","burning","ashtype",
        "size","certificate","packaging"
    ];

    public function catalogue_images() {
        return $this->hasMany(CatalogueImage::class);
    }
}
