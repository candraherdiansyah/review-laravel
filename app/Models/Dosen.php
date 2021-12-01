<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nipd'];

    /*
     * Relasi One-to-Many
     * ==================
     * Buat function bernama mahasiswa(), dimana model 'Dosen' akan memiliki
     * relasi One-to-Many terhadap model 'Mahasiswa' melalui 'id_dosen'
     */
    public function mahasiswa()
    {
        return $this->hasMany('App\Models\Mahasiswa', 'id_dosen');
    }
}
