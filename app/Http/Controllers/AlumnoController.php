<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }

    public function mostrar() {
        // obtener todos los usuarios de la bd y mandarlos a la vista
        //$results = DB::select('SELECT * FROM tbl_alumnos');
        $listaAlumnos = DB::table('tbl_alumnos')->get();
        //lo q mandamos a la vista(luego lo recuperamos en la vista) es decir a la vista le mandamos lo q hay en $liistaAlumnos
        return view('mostrar', compact('listaAlumnos'));
    }
    
    public function borrar($id) {
        //return $id;
        DB::table('tbl_alumnos')->Where('id', '=', $id)->delete();
        //envio a la ruta mostrar
        return redirect('mostrar'); 
    }

    public function crear() {
        return view('crear');

    }

    public function recibir(Request $request) {
        $datos=$request->except('_token','Enviar');
        //return $datosform['nombre'];
        DB::table('tbl_alumnos')->insertGetId(['nombre'=>$datos['nombre'],'apellido'=>$datos['apellido'],'passwd'=>$datos['passwd'],'edad'=>$datos['edad'],'email'=>$datos['email']]);
        return redirect('mostrar');
    }

    public function actualizar($id){
        // first --- sirve para filtrar
        $alumno=DB::table('tbl_alumnos')->where('id','=',$id)->first();
        return view('actualizar',compact('alumno'));
        //return response()->json($alumno);
    }

    public function modificar($id,Request $request){
        //recibimos los datos
        $datos = request()->except('_token','Enviar','_method');
        //return $datos;
        //Insertar los datos en la base de datos
        $alumno=DB::table('tbl_alumnos')->where('id','=',$id)->update($datos);
        //Mostrar la vista mostrar
        return redirect('mostrar');
    }

}
