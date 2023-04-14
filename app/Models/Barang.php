<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'namabarang',
        'kategori_id',
        'deskripsi',
        'tglditemukan',
        'stasiun_id',
        'area_id',
        'status',
        'foto',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function stasiun()
    {
        return $this->belongsTo(Statiun::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
