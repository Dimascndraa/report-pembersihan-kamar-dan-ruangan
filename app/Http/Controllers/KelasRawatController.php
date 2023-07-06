<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\ControlPanel;
use App\Models\KelasRawat;
use App\Models\Room;
use Illuminate\Http\Request;

class KelasRawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kelas-rawat.index', [
            'i' => ControlPanel::all()->first(),
            'kelas_rawat' => KelasRawat::all()
        ]);
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
            'name' => 'max:255|required',
        ]);

        KelasRawat::create($validatedData);
        return redirect('/kelas-rawat')->with('success', 'Ruangan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelasRawat  $kelasRawat
     * @return \Illuminate\Http\Response
     */
    public function ruangan($id)
    {
        $kelasRawat = KelasRawat::where('id', $id)->first();
        $rooms = Room::where('kelas_rawat_id', $kelasRawat->id)->get();

        return view('pages.rooms.index', [
            'i' => ControlPanel::all()->first(),
            'kelas_rawat' => $kelasRawat,
            'rooms' => $rooms
        ]);
    }

    public function tempat_tidur($id)
    {
        $ruangan = Room::where('id', $id)->first();
        $bed = Bed::where('room_id', $ruangan->id)->get();

        return view('pages.beds.index', [
            'i' => ControlPanel::all()->first(),
            'ruangan' => $ruangan,
            'beds' => $bed
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasRawat  $kelasRawat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasRawat $kelasRawat)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
        ]);

        KelasRawat::where('id', $kelasRawat->id)->update($validatedData);
        return redirect('/kelas-rawat')->with('success', 'Kelas berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasRawat  $kelasRawat
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasRawat $kelasRawat)
    {
        KelasRawat::destroy($kelasRawat->id);
        return redirect('/kelas-rawat')->with('success', 'Kelas Rawar berhasil dihapus!');
    }
}
