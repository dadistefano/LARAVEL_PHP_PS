<?php

namespace App\Http\Controllers;

use App\Models\venta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo Carbon::parse('2019-07-23 14:51')->isoFormat('LLLL');
        /*$howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;
        echo $howOldAmI;
        printf("Right now is %s", Carbon::now()->toDateTimeString());
        $tomorrow = Carbon::now();*/

        $venta = venta::all();
        //dd($venta);
        return view('theme.back.ventas.index')->with('venta', $venta);  
    }

    public function user($nombre='Invitado'){
        return 'Usuario '.$nombre;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('theme.back.ventas.crearventa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /*//$hoy = Carbon::now();
         $venta = new venta;
         $venta->fecha='9999-12-31 23:59:59';
         $venta->hora='18:45';
         $venta->importe='2525';
         $venta->id_producto='2';
         $venta->descripcion='Excelente';
         //$venta->$hoy; //Ver si no tira error de formato (poner fecha hoy)
         //$venta->$hoy='16:19:00';   //Ver si no tira error de formato (poner hora hoy)
         $venta->save();
         return 'Datos guardados correctamente';*/
         //return dd($request);
        
         $venta = new venta;
         $venta->fecha = $request->fecha;
         $venta->hora = $request->hora;
         $venta->importe = $request->importe;
         $venta->id_producto = $request->id_producto;
         $venta->descripcion = $request->descripcion;
         $venta->save();
         return 'Venta guardada correctamente!! ';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //tendria que ser delete pero estamos utilizando el metodo GET
        $venta = venta::findOrFail($id); 
        $venta->delete();
        return 'El registro '.$id. ' ha sido eliminado';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = venta::findOrFail($id); 
        //$venta = venta::where('id','=', $id)->firstOrFail();
        //dd($venta);
        $venta->importe = '99999';
        $venta->save();
        return 'Datos actualizados';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {
        //
    }
}
