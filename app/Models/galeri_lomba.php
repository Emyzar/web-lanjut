<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri_lomba extends Model
{
    use HasFactory;
    protected $table = "galeri-lomba";

    public function lomba()
    {
        return $this->hasMany(lomba::class);
    }
}
