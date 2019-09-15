<?php

namespace App\Http\Controllers\principal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\municipio;
use App\candidato;
use App\departamento;
use App\partido;
use App\coorporacion;

class registrocandidatocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $departamento=departamento::all();
      $departamento1=departamento::first();
      $partido=partido::all();

      $coorporacion=coorporacion::all();

      $municipio=municipio::where('departamento_id', $departamento1->id)
      ->get();

      return view('formulario.registro_candidato')
      ->with('partidos', $partido)
      ->with('coorporaciones', $coorporacion)
      ->with('departamentos', $departamento)
      ->with('municipios', $municipio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $fotoc=$request->file('foto');
      $fotocN=$request->cedula.'C.'.$fotoc->getClientOriginalExtension();
      $fotoc->move('img',$fotocN);

      $request{'fotoc'} = $fotocN;
      candidato::create($request->all());
      return redirect()->route('index.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
