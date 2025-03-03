<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Toko::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_toko' => 'required|string|max:100',
            'pemilik' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:20',
        ]);

        $toko = Toko::create($request->all());

        return response()->json($toko, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $toko = Toko::find($id);
        if (!$toko) {
            return response()->json(['message' => 'Toko tidak ditemukan']);
        }

        return response()->json($toko, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $toko = Toko::find($id);
        if (!$toko) {
            return response()->json(['message' => 'Toko tidak ditemukan']);
        }

        $toko->update($request->all());

        return response()->json($toko, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $toko = Toko::find($id);

        if(!$toko){
            return response()->json(['message' => 'Toko tidak ditemukan']);
        }

        $toko->delete();

        return response()->json(['message' => 'Toko berhasil dihapus'], 200);
    }
}
