<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangCategory;
use Illuminate\Http\Request;

class BarangCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.barang-category.index', [
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
            'name' => 'max:255|required',
            'category_code' => 'max:255|required',
            'category_number_code' => 'max:255|required',
        ]);

        BarangCategory::create($validatedData);
        return redirect('/categories')->with('success', 'Kategori Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangCategory  $barangCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BarangCategory $barangCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangCategory  $barangCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangCategory $barangCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangCategory  $barangCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangCategory $category)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'category_code' => 'max:255|required',
            'category_number_code' => 'integer|max:255|required',
        ]);

        BarangCategory::where('id', $category->id)->update($validatedData);
        return redirect('/categories')->with('success', 'Kategori Barang berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangCategory  $barangCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangCategory $category)
    {
        BarangCategory::destroy($category->id);
        return redirect('/categories')->with('success', 'Kategori Barang berhasil dihapus!');
    }
}
