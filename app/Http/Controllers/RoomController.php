<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangCategory;
use App\Models\ControlPanel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        return view('pages.rooms.index', [
            'rooms' => Room::all(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kelas_rawat_id' => 'max:255|required',
            'name' => 'max:255|required',
            'room_number' => 'max:255|required',
        ]);

        Room::create($validatedData);
        return redirect('/ruangan')->with('success', 'Ruangan berhasil ditambahkan!');
    }


    public function update(Request $request, $id)
    {
        $room = Room::where('id', $id)->first();
        $validatedData = $request->validate([
            'kelas_rawat_id' => 'max:255|required',
            'name' => 'max:255|required',
            'room_number' => 'max:255|required',
        ]);

        Room::where('id', $room->id)->update($validatedData);
        return redirect('/ruangan')->with('success', 'Ruangan berhasil diubah!');
    }

    public function destroy($id)
    {
        $room = Room::where('id', $id)->first();
        Room::destroy($room->id);
        return redirect('/ruangan')->with('success', 'Ruangan berhasil dihapus!');
    }
}
