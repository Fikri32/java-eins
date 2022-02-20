<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;

class AboutController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::all();
        return view('front.about',compact('catalogues'));
    }
}
