<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statiun extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];


    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function aduan()
    {
        return $this->hasOne(Aduan::class);
    }
}
