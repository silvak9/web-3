<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Time;

class Jogador extends Model
{
    use HasFactory;
    public function time(){
        return $this->belongsTo(Time::class, 'times_id', 'id');
    }
}
