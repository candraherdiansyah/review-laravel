<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function image()
    {
        // jika ada data dari photo dan juga file yang di folder public images users itu ada
        // yang sesuai dengan namanya
        // maka kita akan memangiil file nya di dalam image book nama foto
        if ($this->photo && file_exists(public_path('images/users/' . $this->photo))) {
            return asset('images/users/' . $this->photo);
        } else {
            return asset('images/no_image.jpg');
        }
    }

    public function deleteImage()
    {
        if ($this->photo && file_exists(public_path('images/users/' . $this->photo))) {
            return unlink(public_path('images/users/' . $this->photo));
        }

    }
}
