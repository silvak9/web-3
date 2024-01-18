<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Veiculo;

class Proprietario extends Model
{
    use HasFactory;

    public function veiculos(){
        return $this->hasMany(Veiculo::class, 'id');
    }
}
