<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public function noticias(){
        return $this->HasMany(Noticia::class, 'idEmpresa');
    }
}
