<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;

class CastController extends Controller
{
    public function index() {
        $cast = cast::all();
        return view('welcome', compact('cast'));
    }

    public function create() {
        $cast = cast::all();
        return view('cast.create', compact('cast'));
    }

    public function store (Request $request) {
        $this->validate($request, [
            'nama',
            'umur',
            'bio',
        ]);

        $cast = cast::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);

        return redirect()->route('cast.index');
    }

    public function show () {
        //
    }

    public function edit ($id) {
        $cast = cast::where('id', $id)->first();
        return view('cast.edit', ["cast" => $cast]);
    }

    public function update (Request $request, $id) {
        $this->validate($request, [
            'nama',
            'umur',
            'bio'
        ]);

        $cast = cast::where('id', $id);
        $cast->update($request->except('_token', '_method'));
        return redirect()->route('cast.index');
    }

    public function destroy ($id) {
        $cast = cast::find($id);
        $cast->delete();
        return to_route('cast.index')->with('hapus data berhasil');
    }
   
}
