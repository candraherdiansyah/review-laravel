<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('home', [HomeController::class, 'index']);
// Route Admin
route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // CRUD
    Route::resource('author', AuthorController::class);
    Route::resource('users', UserController::class);
    Route::resource('books', BookController::class);

});

// Relasi one to one
Route::get('relasi-1', function () {
    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', '1015015072')
        ->first();

    # Tampilkan nama wali mahasiswa
    return "Nama Mahasiswa = $mahasiswa->nama<br> Nama Wali = "
    . $mahasiswa->wali->nama;

});

// Relasi one to Many
Route::get('relasi-2', function () {
    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing
    return "Nama Mahasiswa = $mahasiswa->nama<br> Nama Dosen = "
    . $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    # Temukan dosen dengan yang bernama Yulianto
    $dosen = App\Models\Dosen::where('nama', '=', 'Yulianto')->first();
    echo "Nama Dosen : $dosen->nama";
    echo "<br> Daftar Mahasiswa :";
    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
    }
});

// Relasi Many To Many
Route::get('relasi-4', function () {
    # Bila kita ingin melihat hobi saya
    $novay = App\Models\Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();
    echo "Nama : $novay->nama";
    echo "<br> Hobi Saya :";
    # Tampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp) {
        echo '<li>' . $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function () {
    # Temukan hobi Mandi Hujan
    $mandi_hujan = App\Models\Hobi::where('hobi', '=', 'Mandi Hujan')->first();
    // dd($mandi_hujan);
    echo "Hobi : $mandi_hujan->hobi<br>";
    echo "Daftar Orang:";
    # Tampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
    }

});

Route::get('eloquent', function () {
    # Ambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
    $mahasiswa = App\Models\Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    # Kirim variabel ke View
    return view('eloquent', compact('mahasiswa'));
});
