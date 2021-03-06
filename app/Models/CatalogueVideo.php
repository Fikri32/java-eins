<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogueVideo extends Model
{
    protected $fillable = [ "catalogue_id", "video" ];

    public function catalogue(){
        return $this->belongsTo(Catalogue::class);
    }
}
