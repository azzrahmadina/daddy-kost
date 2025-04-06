<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;
    protected $table = 'penghunis';
    protected $fillable = ['nama', 'email', 'gender', 'no_hp', 'status'];

    public static function getStatusOptions()
    {
        return ['aktif', 'nonaktif'];
    }

    public static function getGender()
    {
        return ['perempuan', 'laki-laki'];
    }

    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'id_penghuni');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_penghuni');
    }


}
