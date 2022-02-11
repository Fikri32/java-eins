<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\CatalogueImage as ImageModel;

class CatalogueImage extends Controller
{
    public function Upload(Request $req) {
        $data = $req->all();
        $images = $data['images'];
        
        for ($i=0; $i < count($images); $i++) { 
            $name = Str::random(10).'-'.$req["id"].'.'.$images[$i]['format'];
            Storage::disk('catalogue_images')->put($name, base64_decode($images[$i]['encoded']));
            $db = new ImageModel();
            $db->catalogue_id = $req["id"];
            $db->image = $name;
            $db->save();
        }
    }

    Public function Delete(Request $req) {
        dd($req);
    }
}
