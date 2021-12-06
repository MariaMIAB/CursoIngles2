<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;
    public function Evaluacion() {
        return $this->HasMani('App/Models/Evaluacion');
        }
        public function Usuario() {
            return $this->belongsTo('App/Models/Usuario');
            }
}
