<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];
    protected $with = ['bed'];

    use HasFactory;

    public function kelas_rawat()
    {
        return $this->belongsTo(KelasRawat::class);
    }

    public function bed()
    {
        return $this->hasMany(Bed::class);
    }
}
