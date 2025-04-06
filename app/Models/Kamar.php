<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamars';
    protected $fillable = ['nama', 'harga', 'status', 'gambar', 'keterangan', 'id_kategori', 'id_penghuni'];

    public static function getStatusOptions()
    {
        return ['terisi', 'kosong'];
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_kamar');
    }
}
