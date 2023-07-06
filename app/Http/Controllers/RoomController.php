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
            'name' => 'max:255|required',
            'room_code' => 'max:255|required',
            'floor' => 'integer|max:255|required',
        ]);

        Room::create($validatedData);
        return redirect('/rooms')->with('success', 'Ruangan berhasil ditambahkan!');
    }

    public function show(Barang $barang, Room $room)
    {
        return view('pages.rooms.show', [
            'title' => "Ruang $room->name",
            'room' => $room,
            'categories' => BarangCategory::all(),
            'barangs' => $barang->where('room_id', $room->id)->get(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'room_code' => 'max:255|required',
            'floor' => 'integer|max:255|required',
        ]);

        Room::where('id', $room->id)->update($validatedData);
        return redirect('/rooms')->with('success', 'Ruangan berhasil diubah!');
    }

    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        return redirect('/rooms')->with('success', 'Ruangan berhasil dihapus!');
    }

    public function storeBarang(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required|max:255",
            'barang_code' => "required|max:255",
            'category_id' => "required|max:255",
            'room_id' => "required|max:255",
            'foto' => "required|max:5120",
            'merk' => "required|max:5120",
            'condition' => "required|max:5120",
            'bidding_year' => "required|max:255",
        ]);
        $validatedData['foto'] = $request->file('foto')->store('barang');
        $validatedData['room_id'] = $request->room_id;

        Barang::create($validatedData);
        return redirect('/room')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function updateBarang(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'name' => "required|max:255",
            'barang_code' => "required|max:255",
            'category_id' => "required|max:255",
            'foto' => "file|max:5120",
            'merk' => "required|max:255",
            'condition' => "required|max:255",
            'bidding_year' => "required|max:255",
        ]);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($barang->foto);
                $validatedData['foto'] = $request->file('foto')->store('barang');
            }
        }

        Barang::where('id', $barang->id)->update($validatedData);
        return redirect('/barang')->with('success', 'Barang berhasil diubah!');
    }
}
