<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    // proteced $table = 'walis';

    protected $fillable = ['nama', 'id_mahasiswa'];

    public function mahasiswa()
    {
        // data dari model Wali bisa dimiliki oleh model Mahasiswa
        // melalui fk 'id_mahasiswa'
        return $this->belongsTo('App\Models\Mahasiswa', 'id_mahasiswa');
    }
}
