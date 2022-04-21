<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function index() {
        $szakdogak = response()->json(Szakdoga::all());
        return $szakdogak;
    }

    public function modositas(Request $request, $id) {
        $product=Szakdoga::find($id);
        $product->update($request->all());
        return $product;
    }

    public function torles($id) {
        $torles = Szakdoga::find($id)->delete();
        return $torles;
    }

    public function ujRekord (Request $request) {
        $uj = new Szakdoga;

        $uj->szakdoga_nev = $request->input('szakdoga_nev');
        $uj->tagokneve = $request->input('tagokneve');
        $uj->oldallink = $request->input('oldallink');
        $uj->githublink = $request->input('githublink');
        
        $uj->save();
        return Szakdoga::find($uj->id);
    }
}
