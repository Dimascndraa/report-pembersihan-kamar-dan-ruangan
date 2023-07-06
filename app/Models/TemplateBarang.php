<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateBarang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category'];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function category()
    {
        return $this->belongsTo(BarangCategory::class);
    }
}
