<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function Rol() {
        return $this->belongsTo('App/Models/Rol');
        }
    public function Asistencia() {
            return $this->HasMani('App/Models/Asistencia');
            }
    public function Usuario_Materia() {
                return $this->belongsTo('App/Models/Usuario_Maetria');
                }
}
