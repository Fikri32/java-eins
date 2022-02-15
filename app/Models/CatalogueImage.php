<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogueImage extends Model
{
    protected $fillable = [ "catalogue_id", "image" ];

    public function catalogue(){
        return $this->belongsTo(Catalogue::class);
    }
}
