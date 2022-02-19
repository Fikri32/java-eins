<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;

class ContactController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::all();
        return view('front.contact',compact('catalogues'));
    }
}
