<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangCategory;
use App\Models\ControlPanel;
use App\Models\Room;
use App\Models\TemplateBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_admin == 0) {
            $id_ruang = auth()->user()->room_id;
            $barang = Barang::where('room_id', $id_ruang)->get();
        } else {
            $barang = Barang::all();
        }

        return view('pages.barang.index', [
            'barangs' => $barang,
            'template' => TemplateBarang::all(),
            'categories' => BarangCategory::all(),
            'rooms' => Room::all(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function pindahkan(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'room_id' => "required|max:255",
        ]);

        $room_code = Room::where('id', $request['room_id'])->first()->room_code;

        // Dapatkan urutan barang terakhir berdasarkan template_barang
        $lastUrutanBarang = Barang::where('template_barang_id', $barang->template_barang_id)
            ->where('urutan_barang', '<>', '0')
            ->orderByDesc('urutan_barang')
            ->first();

        if ($lastUrutanBarang) {
            $urutanBarang = intval($lastUrutanBarang->urutan_barang) + 1;
        } else {
            $urutanBarang = 1;
        }

        // Set urutan_barang dengan format "001"
        $validatedData['urutan_barang'] = str_pad($urutanBarang, 3, '0', STR_PAD_LEFT);

        $item_code = $request['instance_code'] . "/" . $request['category_code'] . "/" . $room_code . "/" . $barang->template_barang->barang_code . "." . $barang->template_barang->name . " " . $validatedData['urutan_barang'] . "/" . $barang->bidding_year;
        $validatedData['item_code'] = $item_code;

        Barang::where('id', $barang->id)->update($validatedData);
        return redirect('/barang')->with('success', 'Barang berhasil dipindahkan!');
    }

    public function pinjam(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'ruang_pinjam' => "required|max:255",
        ]);
        $validatedData['pinjam'] = true;
        Barang::where('id', $barang->id)->update($validatedData);
        return redirect('/barang')->with('success', 'Barang berhasil dipinjamkan!');
    }

    public function kembali(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'ruang_pinjam' => "required|max:255",
        ]);
        $validatedData['pinjam'] = false;
        $validatedData['ruang_pinjam'] = false;

        Barang::where('id', $barang->id)->update($validatedData);
        return redirect('/barang')->with('success', 'Barang berhasil dikembalikan!');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'custom_name' => "max:255",
            'template_barang_id' => "required|max:255",
            'condition' => "required|max:5120",
            'bidding_year' => "required|max:255",
            'room_id' => "max:255",
        ]);

        if (!auth()->user()->is_admin) {
            $room_code = Room::where('id', $request['room_id'])->first()->room_code;

            $barang_id = $request->template_barang_id;
            $template = TemplateBarang::where('id', $barang_id)->first();

            $lastUrutanBarang = Barang::where('template_barang_id', $template->id)
                ->where('urutan_barang', '<>', '0')
                ->orderByDesc('urutan_barang')
                ->first();
            if ($lastUrutanBarang) {
                $urutanBarang = intval($lastUrutanBarang->urutan_barang) + 1;
            } else {
                $urutanBarang = 1;
            }
            $validatedData['urutan_barang'] = str_pad($urutanBarang, 3, '0', STR_PAD_LEFT);

            $item_code = $request['instance_code'] . "/" . $template->category->category_code . "/" . $room_code . "/" . $template->barang_code . "." . $template->name . " " . $validatedData['urutan_barang'] . "/" . $request->bidding_year;
            $validatedData['item_code'] = $item_code;
        }

        Barang::create($validatedData);
        return redirect('/barang')->with('success', 'Barang berhasil ditambahkan!');
    }

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

    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/barang')->with('success', 'barang berhasil dihapus!');
    }
}
