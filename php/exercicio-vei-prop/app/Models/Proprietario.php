<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    use HasFactory;
    public function veiculo(){
        return $this->hasMany(Veiculo::class, 'proprietarios_id');
    }
}
