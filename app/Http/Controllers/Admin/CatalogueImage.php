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
        $uploaded_items = [];

        for ($i=0; $i < count($images); $i++) { 
            $name = Str::random(10).'-'.$req["id"].'.'.$images[$i]['format'];
            Storage::disk('catalogue_images')->put($name, base64_decode($images[$i]['encoded']));
            
            $db = new ImageModel();
            $db->catalogue_id = $req["id"];
            $db->image = $name;
            $db->save();

            array_push($uploaded_items, $db);
        }

        return response()->json($uploaded_items , 200);
    }

    Public function Delete($id) {
        $image = ImageModel::find($id);
        $targetPath = public_path('/catalogue_images/'.$image->image) ;
        unlink($targetPath);
        $image->delete();
        return response()->json($image, 200);
    }

    public function GetImage($id) {
        $images = ImageModel::where('catalogue_id', $id)->get();
        return response()->json($images, 200);
    }
}
