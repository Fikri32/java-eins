<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\CatalogueImage as ImageModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CatalogueController extends Controller
{
    public function index(){
        $catalogues = Catalogue::all();
        return view('admin.catalogue.index', compact('catalogues'));
    }

    public function getDetail($id){
        $catalogue = Catalogue::find($id);
        return response()->json($catalogue, 200);
    }

    public function create(Request $req) {
        // simpan catalogue dulu
        $catalogue = new Catalogue();
        $catalogue->name = $req['name'];
        $catalogue->description = $req['description'];
        $catalogue->moq = $req['moq'];
        $catalogue->quality = $req['quality'];
        $catalogue->calorie = $req['calorie'];
        $catalogue->standart = $req['standart'];
        $catalogue->calorie = $req['calorie'];
        $catalogue->mousture = $req['mousture'];
        $catalogue->ash = $req['ash'];
        $catalogue->carbon = $req['carbon'];
        $catalogue->burning = $req['burning'];
        $catalogue->ashtype = $req['ashtype'];
        $catalogue->size = $req['size'];
        $catalogue->certificate = $req['certificate'];
        $catalogue->packaging = $req['packaging'];
        $catalogue->save();

        // simpan gambar 
        $images = $req['images'];
        $uploaded_items = [];
        for ($i=0; $i < count($images); $i++) { 
            $name = Str::random(10).'-'.$catalogue->id.'.'.$images[$i]['format'];
            Storage::disk('catalogue_images')->put($name, base64_decode($images[$i]['encoded']));
            
            $db = new ImageModel();
            $db->catalogue_id = $catalogue->id;
            $db->image = $name;
            $db->save();

            array_push($uploaded_items, $db);
        }

        // response 
        $response = [
            "catalogue" => $catalogue,
            "images" => $uploaded_items,
        ];

        // write response
        return response()->json($response , 200);
    }

    public function update(Request $req) {
        $catalogue = Catalogue::findOrFail($req->id);
        $catalogue->update([
            "name" => $req->name, 
            "description" => $req->description, 
            "moq" => $req->moq, 
            "capacity" => $req->capacity, 
        ]);
        return response()->json($catalogue, 200);
    }

    public function delete(Request $req) {
        // get data gambar
        $images = ImageModel::where('catalogue_id', $req->id)->get();
        foreach ($images as $img) {
            $path = public_path() . '\catalogue_images/' . $img->image;
            unlink($path);
            ImageModel::find($img->id)->delete();
        }

        // hapus data catalogue
        $catalogue = Catalogue::find($req->id);
        $catalogue->delete();
        return response()->json($catalogue, 200);
    }
}
