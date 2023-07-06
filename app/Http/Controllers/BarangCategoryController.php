<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangCategory;
use App\Models\ControlPanel;
use App\Models\TemplateBarang;
use Illuminate\Http\Request;

class BarangCategoryController extends Controller
{
    public function index()
    {
        return view('pages.barang-category.index', [
            'categories' => BarangCategory::all(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    function show(BarangCategory $category)
    {
        $TBarang = TemplateBarang::where('category_id', $category->id)->get();

        return view('pages.barang-category.show', [
            'categories' => BarangCategory::all(),
            'items' => $TBarang,
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'category_code' => 'max:255|required|unique:barang_categories',
            // 'category_number_code' => 'max:255|required|unique:barang_categories',
        ]);

        BarangCategory::create($validatedData);
        return redirect('/categories')->with('success', 'Kategori Barang berhasil ditambahkan!');
    }

    public function update(Request $request, BarangCategory $category)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'category_code' => 'max:255|required:unique:barang_categories',
            // 'category_number_code' => 'max:255|required:unique:barang_categories',
        ]);

        BarangCategory::where('id', $category->id)->update($validatedData);
        return redirect('/categories')->with('success', 'Kategori Barang berhasil diubah!');
    }

    public function destroy(BarangCategory $category)
    {
        BarangCategory::destroy($category->id);
        return redirect('/categories')->with('success', 'Kategori Barang berhasil dihapus!');
    }
}
