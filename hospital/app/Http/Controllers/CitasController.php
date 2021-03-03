<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['citas']=Citas::paginate(1);
        return view('citas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('citas.create');
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

        $campos=[
            'Nombre'=>'required|string|max:100',
            'APaterno'=>'required|string|max:100',
            'AMaterno'=>'required|string|max:100',
            'FechaCita'=>'required|date',
            'Id_Doctor'=>'required|integer',
            'Id_Departamento'=>'required|integer',
        ];

        $mensaje=[
            'required'=>'El campo :attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);

        //$datoscitas = request()->all();
        $datoscitas = request()->except('_token');
        Citas::insert($datoscitas);
        //return response()->json($datoscitas);
        return redirect('citas')->with('mensaje','Cita agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $cita=Citas::findOrFail($id);

        return view('citas.edit',compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'APaterno'=>'required|string|max:100',
            'AMaterno'=>'required|string|max:100',
            'FechaCita'=>'required|date',
            'Id_Doctor'=>'required|integer',
            'Id_Departamento'=>'required|integer',
        ];

        $mensaje=[
            'required'=>'El campo :attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);



        $datoscitas = request()->except('_token','_method');
        Citas::where('id','=',$id)->update($datoscitas);
        $cita=Citas::findOrFail($id);
        //return view('citas.edit',compact('cita'));
        return redirect('citas')->with('mensaje','Cita Actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        Citas::destroy($id);
        return redirect('citas')->with('mensaje','Cita eliminada con éxito');
    }
}
