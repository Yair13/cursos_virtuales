<?php

namespace App\Http\Controllers;


use App\Registro_estudiantes;
use App\Programas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroEstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $g_programas = Programas::pluck('descripcion','codigo'); 
        return view('registro_estudiantes/index', compact('g_programas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $g_programas = Programas::pluck('descripcion','codigo'); 
        return view('registro_estudiantes/index', compact('g_programas'));

    }

    public function list_aspirantes()
    {
        //


        $array_aspirantes = DB::table('registro_estudiantes AS r')->select(DB::raw('r.*,p.descripcion as Nprograma'))
        ->join('programas AS p', 'p.id', '=', 'r.programa')->get()->toArray();

        $g_programas = Programas::pluck('descripcion','codigo'); 
        return view('registro_estudiantes/listado_aspirantes', compact('array_aspirantes','g_programas'));

    }

    public function list_aspirantes_filtr(Request $request)
    
    {
        //

        $array_aspirantes = DB::table('registro_estudiantes AS r')->select(DB::raw('r.*,p.descripcion as Nprograma'))
        ->join('programas AS p', 'p.id', '=', 'r.programa');
         

    

        if ($request->nombres!='') {

            $array_aspirantes = $array_aspirantes
       
            ->where('r.nombres','=',$request->get('nombres'));
       
          }
          if ($request->email!='') {

            $array_aspirantes = $array_aspirantes
       
            ->where('r.email','=',$request->get('email'));
       
          }

          if ($request->programa!='') {

            $array_aspirantes = $array_aspirantes
       
            ->where('r.programa','=',$request->get('programa'));
       
          }
        $array_aspirantes=$array_aspirantes->get()->toArray();


        $g_programas = Programas::pluck('descripcion','codigo'); 
        return view('registro_estudiantes/listado_aspirantes', compact('array_aspirantes','g_programas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
       $resp = Registro_estudiantes::updateOrCreate(['email' => $request->email], [ 'nombres' => $request->nombres, 'apellidos' => $request->apellidos, 'email' => $request->email, 'telefono' => $request->telefono, 'programa' => $request->programa,'estado'=>'1']);
       return 1;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro_estudiantes  $registro_estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(Registro_estudiantes $registro_estudiantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro_estudiantes  $registro_estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro_estudiantes $registro_estudiantes)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro_estudiantes  $registro_estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro_estudiantes $registro_estudiantes)
    {
        //
  
        $resp_udp =  Registro_estudiantes::find($request->id);
        $resp_udp->update(['estado'=>'2']);
        return 1;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro_estudiantes  $registro_estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro_estudiantes $registro_estudiantes)
    {
        //
    }
}
