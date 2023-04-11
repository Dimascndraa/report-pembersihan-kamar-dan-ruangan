<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangCategory extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function template_barang()
    {
        return $this->hasMany(TemplateBarang::class);
    }
}
