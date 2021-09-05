<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    public function Materia() {
        return $this->belongsTo('App/Models/Materia');
        }
    public function Evaluacion() {
            return $this->HasOne('App/Models/Evaluacion');
            }
    public function Actividades() {
                return $this->HasOne('App/Models/Actividades');
                }
}
