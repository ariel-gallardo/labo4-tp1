<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empresa extends Model
{
    use HasFactory;
    public function noticias(){
        return $this->hasMany(Noticia::class);
    }

    public function last5Noticias(){
        return $this->noticias()->orderBy('fecha', 'DESC')->take(5);
    }
}
