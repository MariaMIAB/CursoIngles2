<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    public function Notas() {
        return $this->belongsTo('App/Models/Notas');
        }
    public function Tema() {
            return $this->HasOne('App/Models/Tema');
            }
}
