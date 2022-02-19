<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\CatalogueImage as ImageModel;
use DB;


class ProductController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::all();
        return view('front.product',compact('catalogues'));
    }
    // public function detail()
    // {
    //     $detail = Catalogue::find($id);
    //     return view('front.detail',compact('detail'));
    // }
    public function detail($id)
    {
        $images = ImageModel::where('catalogue_id', $id)->get();
        $vid = DB::table('catalogue_videos')->where('catalogue_id', $id)->first();
        $detail = Catalogue::find($id);
        $catalogues = Catalogue::all();
        return view('front.detail',compact('detail','images','vid','catalogues'));
    }
}
