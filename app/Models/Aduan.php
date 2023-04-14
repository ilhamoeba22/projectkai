<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;

    protected $table = 'aduans';

    protected $fillable = [
        'id',
        'namabarang',
        'user_id',
        'kategori_id',
        'deskripsi',
        'tglketinggalan',
        'stasiun_id',
        'area_id',
        'keteranganlain',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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
