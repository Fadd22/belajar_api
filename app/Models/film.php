<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
    public function kategri()
    {
        return $this->belongsTo(film::class, 'id_kategori');
    }
    public function genre()
    {
        return $this->belongsTo(film::class, 'genre_film', 'id_film' ,'id_genre');
    }
    public function film()
    {
        return $this->belongsTo(film::class, 'genre_film', 'id_film' ,'id_aktor');
    }
}
