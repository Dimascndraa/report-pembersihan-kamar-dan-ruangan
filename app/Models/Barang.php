<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function template_barang()
    {
        return $this->belongsTo(TemplateBarang::class);
    }
}
