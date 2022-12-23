<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomor_peserta extends Model
{
    use HasFactory;
    protected $table = "nomor_peserta";

    public function lomba()
    {
        return $this->belongsTo(lomba::class, 'lomba_id');
    }

    public function peserta()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
