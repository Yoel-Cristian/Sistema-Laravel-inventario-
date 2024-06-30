<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'estudiantes';

    protected $fillable = ['nombre', 'grado', 'paralelo'];

    protected $dates = ['deleted_at'];

}
