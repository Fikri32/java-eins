<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;
use Illuminate\Http\Response;

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
        Catalogue::create($req->all());
        return response()->json([
            'message' => 'Data Successfully Added!',
            'success' => true
        ], 200);
    }

    public function update(Request $req) {
        $catalogue = Catalogue::findOrFail($req->id);
        $catalogue->update([
            "name" => $req->name, 
            "description" => $req->description, 
            "moq" => $req->moq, 
            "capacity" => $req->capacity, 
        ]);
        return response()->json([
            'message' => 'Data Successfully Updated!',
            'success' => true
        ], 200);
    }

    public function delete(Request $req) {
        $catalogue = Catalogue::find($req->id);
        $catalogue->delete();
        return response()->json([
            'message' => 'Data Successfully Removed!',
            'success' => true
        ], 200);
    }
}
