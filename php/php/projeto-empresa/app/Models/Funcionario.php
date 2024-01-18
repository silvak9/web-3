<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    public function departamento(){
        return $this->belongsTo(Departamento::class, 'departamentos_id', 'id');
    }
}
