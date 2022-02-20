<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\CatalogueVideo as VideoModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CatalogueVideo extends Controller
{
    public function upload(Request $req) {
        $data = $req->all();
        $id = $data["id"];
        $video = $data["video"];
        $format = $video['format'];
        $encoded = $video['encoded'];

        // cari produk jika tidak ada gagalkan upload
        $product = Catalogue::findOrFail($id);
        if ($product->id == 0) {
            return response()->json(["fail"=>true], 200);
        }

        // simpan 
        $name = $id.'.'.$format;
        Storage::disk('catalogue_videos')->put($name, base64_decode($encoded));

        // simpan video ke db jika belum ada
        $db = VideoModel::firstOrCreate(
            ["catalogue_id" => $id],
            ["video" => $name],
        );

        return response()->json($db, 200);
    }

    public function getVideo($id) {
        $vid = DB::table('catalogue_videos')->where('catalogue_id', $id)->first();
        return response()->json($vid, 200);
    }
}
