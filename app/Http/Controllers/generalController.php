<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipio;

class generalController extends Controller
{
  public function getCiudades($departamento_id)
  {
      $municipio=municipio::select('id','codigo','nombre')
      ->where('departamento_id',$departamento_id)
      ->get();

      return response()->json($municipio);
  }
}
