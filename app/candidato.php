<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidato extends Model
{
  protected $fillable = ['cedula','nombres','apellidos','email','telefono','fotoc','partido_id','coorporacion_id','municipio_id'];
}
