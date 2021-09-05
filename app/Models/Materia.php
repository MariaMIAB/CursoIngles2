<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    public function Usuario_Materia() {
        return $this->HasMani('App/Models/Usuario_Materia');
        }
    public function Tema() {
            return $this->HasMani('App/Models/Tema');
            }
    public function Cronograma() {
                return $this->HasOne('App/Models/Cronograma');

                }
}
