<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'catatan',
        'foto',
        'barang_id',
        'aduan_id',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
