<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lomba extends Model
{
    use HasFactory;
    protected $table = "lomba";

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }

    public function nomor_peserta()
    {
    return $this->hasOne(nomor_peserta::class, "user_id");
    }

    public function user()
    {
    return $this->hasMany(user::class, "user_id");
    }

    public function galeri_lomba()
{
    return $this->hasMany(Lomba::class, "user_id");
}

    
}
