<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_Materia extends Model
{
    use HasFactory;
    public function Usuario() {
        return $this->belongsTo('App/Models/Usuario');
        }
    public function Materia() {
            return $this->belongsTo('App/Models/Materia');
            }
}
