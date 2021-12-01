<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    # Tentukan nama tabel terkait
    // protected $table = 'mahasiswas';
    // jika aturan penamaan model dan migration singular dan plural
    // maka code ini tidak perlu digunakan

    # Mass Asignment -> bisa menambah banyak data secara bersamaan
    protected $fillable = ['nama', 'nim'];

    public function wali()
    {
        // model Mahasiswa bisa memiliki 1 data dari model Wali
        // melalui fk 'id_mahasiswa'
        return $this->hasOne('App\Models\Wali', 'id_mahasiswa');
    }

    /*
     * Relasi One-to-Many
     * =================
     */

    public function dosen()
    {
        // data model Mahasiswa dimiliki oleh model Dosen melalui fk 'id_dosen'
        return $this->belongsTo('App\Models\Dosen', 'id_dosen');
    }

    /*
     * Relasi Many-to-Many
     * ===================
     * Buat function bernama hobi(), dimana model 'Mahasiswa' memiliki relasi
     * Many-to-Many (belongsToMany) terhadap model 'Hobi' yang terhubung oleh
     * tabel 'mahasiswa_hobi' masing-masing melalui 'id_mahasiswa' dan 'id_hobi'
     */

    public function hobi()
    {
        return $this->belongsToMany('App\Models\Hobi',
            'mahasiswa_hobi',
            'id_mahasiswa',
            'id_hobi');
    }
}
