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
}
