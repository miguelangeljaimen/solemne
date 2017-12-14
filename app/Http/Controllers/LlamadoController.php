<?php

namespace App\Http\Controllers;

use App\Llamado;
use Illuminate\Http\Request;
use mjaimen\Controladores\ClienteControlador;

class LlamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

    $cliente = ClienteControlador::crear('2009-10-10','2009-10-20',10,10);

 
    echo "diferencia = ".ClienteControlador::diferenciaDias($cliente)." <br/>";
    echo "punto de reorden = ".ClienteControlador::puntoReorden($cliente)." <br/>";
    echo "demanda diaria  = ".ClienteControlador::demandaDiaria($cliente)." <br/>";
    echo "AlgoritmoX ".ClienteControlador::algoritmoX($cliente)." <br/>";
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.llamados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          

               /*$cliente = new Llamado;
                $cliente->pcompra = $request->pcompra; 
                $cliente->ucompra = $request->ucompra; 
                $cliente->total = $request->total; 
                $cliente->cantucompra = $request->cantucompra; 
                 */
                
                /*$llamado->save();
                */

    $cliente = ClienteControlador::crear($request->pcompra,$request->ucompra,$request->total,$request->cantucompra);

 
    echo "diferencia = ".ClienteControlador::diferenciaDias($cliente)." <br/>";
    echo "punto de reorden = ".ClienteControlador::puntoReorden($cliente)." <br/>";
    echo "demanda diaria  = ".ClienteControlador::demandaDiaria($cliente)." <br/>";
    if(ClienteControlador::algoritmoX($cliente) == "ya es muy tarde"){
        echo "<h2>".ClienteControlador::algoritmoX($cliente)." :( <h2/><br/>";
    }else{
    echo "<h2>El cliente debe ser llamado en ".ClienteControlador::algoritmoX($cliente)." días <h2/><br/>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Llamado  $llamado
     * @return \Illuminate\Http\Response
     */
    public function show(Llamado $llamado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Llamado  $llamado
     * @return \Illuminate\Http\Response
     */
    public function edit(Llamado $llamado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Llamado  $llamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Llamado $llamado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Llamado  $llamado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Llamado $llamado)
    {
        //
    }
}
