<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangCategory;
use App\Models\ControlPanel;
use App\Models\Room;
use App\Models\TemplateBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemplateBarangController extends Controller
{
    public function index()
    {
        return view('pages.template-barang.index', [
            'template' => TemplateBarang::all(),
            'categories' => BarangCategory::all(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function show(TemplateBarang $templateBarang)
    {
        $barang = Barang::where("template_barang_id", $templateBarang->id)->get();

        return view('pages.template-barang.show', [
            'barangs' => $barang,
            'template' => TemplateBarang::all(),
            'categories' => BarangCategory::all(),
            'rooms' => Room::all(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => "required|max:255",
            'name' => "required|max:255",
            'barang_code' => "required|max:255",
            'foto' => "max:5120",
            'merk' => "max:5120",
        ]);
        if ($request->foto) {
            $validatedData['foto'] = $request->file('foto')->store('barang');
        }
        TemplateBarang::create($validatedData);
        return redirect('/template_barang')->with('success', 'Template Barang berhasil ditambahkan!');
    }

    public function update(Request $request, TemplateBarang $templateBarang)
    {
        $validatedData = $request->validate([
            'category_id' => "required|max:255",
            'name' => "required|max:255",
            'barang_code' => "required|max:255",
            'foto' => "file|max:5120",
            'merk' => "required|max:255",
        ]);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($templateBarang->foto);
                $validatedData['foto'] = $request->file('foto')->store('barang');
            }
        }
        TemplateBarang::where('id', $templateBarang->id)->update($validatedData);
        return redirect('/template_barang')->with('success', 'Template Barang berhasil diubah!');
    }

    public function destroy(TemplateBarang $templateBarang)
    {
        if ($templateBarang->foto) {
            Storage::delete($templateBarang->foto);
        }
        TemplateBarang::destroy($templateBarang->id);
        return redirect('/template_barang')->with('success', 'Template Barang berhasil dihapus!');
    }
}
