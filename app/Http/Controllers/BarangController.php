<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangCategory;
use App\Models\Room;
use App\Models\TemplateBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.barang.index', [
            'barangs' => Barang::all(),
            'template' => TemplateBarang::all(),
            'categories' => BarangCategory::all(),
            'rooms' => Room::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pindahkan(Request $request, $id)
    {

        return $request;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'custom_name' => "max:255",
            'template_barang_id' => "required|max:255",
            'condition' => "required|max:5120",
            'bidding_year' => "required|max:255",
        ]);

        Barang::create($validatedData);
        return redirect('/daftar_rekam_medis')->with('success', 'Pasien berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'custom_name' => "max:255",
            'template_barang_id' => "required|max:255",
            'condition' => "required|max:255",
            'bidding_year' => "required|max:255",
        ]);

        Barang::where('id', $barang->id)->update($validatedData);
        return redirect('/barang')->with('success', 'Barang berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/barang')->with('success', 'barang berhasil dihapus!');
    }
}
