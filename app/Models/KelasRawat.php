<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasRawat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['ruangan'];

    public function ruangan()
    {
        return $this->hasMany(Room::class);
    }
}
