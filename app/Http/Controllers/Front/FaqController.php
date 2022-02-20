<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;

class FaqController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::all();
        return view('front.faq',compact('catalogues'));
    }

}
 