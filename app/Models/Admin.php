<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    // Tentukan tabel yang digunakan
    protected $table = 'admins';

    // Tentukan kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Sembunyikan kolom tertentu saat model dikembalikan
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
