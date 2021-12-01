<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;

    protected $fillable = ['hobi'];

    /*
     * Relasi Many-to-Many
     * ===================
     * Buat function bernama mahasiswa(), dimana model 'Hobi' memiliki relasi
     * Many-to-Many (belongsToMany) terhadap model 'Mahasiswa' yang terhubung oleh
     * tabel 'mahasiswa_hobi' masing-masing melalui 'id_hobi' dan 'id_mahasiswa'
     */

    public function mahasiswa()
    {
        return $this->belongsToMany('App\Models\Mahasiswa',
            'mahasiswa_hobi',
            'id_hobi',
            'id_mahasiswa');
    }
}
