<?php

namespace App\Http\Controllers;

use App\Models\BarangCategory;
use App\Models\TemplateBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Template\Template;

class TemplateBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.template-barang.index', [
            'template' => TemplateBarang::all(),
            'categories' => BarangCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category_id' => "required|max:255",
            'name' => "required|max:255",
            'barang_code' => "required|max:255",
            'foto' => "required|max:5120",
            'merk' => "required|max:5120",
        ]);
        $validatedData['foto'] = $request->file('foto')->store('barang');

        TemplateBarang::create($validatedData);
        return redirect('/template_barang')->with('success', 'Template Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TemplateBarang  $templateBarang
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateBarang $templateBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemplateBarang  $templateBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateBarang $templateBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TemplateBarang  $templateBarang
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemplateBarang  $templateBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateBarang $templateBarang)
    {
        if ($templateBarang->foto) {
            Storage::delete($templateBarang->foto);
        }
        TemplateBarang::destroy($templateBarang->id);
        return redirect('/template_barang')->with('success', 'Template Barang berhasil dihapus!');
    }
}
