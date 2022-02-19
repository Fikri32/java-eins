<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;

class ProductController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::all();
        return view('front.product',compact('catalogues'));
    }
    public function detail()
    {
        $detail = Catalogue::find($id);
        return view('front.detail',compact('detail'));
    }
    // public function detail($id)
    // {
    //     $detail = Catalogue::find($id);
    //     return view('front.detail',compact('detail'));
    // }
}
