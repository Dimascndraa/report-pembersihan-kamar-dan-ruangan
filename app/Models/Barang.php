<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['id'];
    protected $with = ['room', 'template_barang'];

    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function template_barang()
    {
        return $this->belongsTo(TemplateBarang::class);
    }

    public static function boot()
    {
        parent::boot();

        // Hapus urutan_barang saat menyimpan barang baru
        self::creating(function ($barang) {
            $barang->urutan_barang = 0;
        });
    }

    // Relasi dengan template_barang
    public function templateBarang()
    {
        return $this->belongsTo(TemplateBarang::class);
    }
}
