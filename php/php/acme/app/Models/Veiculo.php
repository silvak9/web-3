<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proprietario;

class Veiculo extends Model
{
    use HasFactory;

    public function proprietario(){
        return $this->belongsTo(Proprietario::class, 'proprietarios_id', 'id');
    }
}