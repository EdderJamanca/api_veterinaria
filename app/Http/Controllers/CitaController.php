<?php

namespace App\Http\Controllers;

// use Exception;
use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CitaController extends Controller
{
     public function listCita(){
        // dd('dadsd');
        $citas=Cita::all();

        return response()->json($citas,201);
     }

     public function registrar(Request $request){
        $newCita=new Cita();

        $newCita->nom_mascota=$request->nom_mascota;
        $newCita->nom_propietario=$request->nom_propietario;
        $newCita->diagnostico=$request->diagnostico;
        $newCita->fecha_registro= Carbon::now();;

        $newCita->save();

        return response()->json(['mensaje'=>'registro exitoso;'],201);
     }

     public function update(int $id, Request $request){

        $actualCita= Cita::find($id);

        // dd($actualCita);
        if(!$actualCita){
            throw new Exception(
                'No existe esta cita',
                Response::HTTP_BAD_REQUEST
            );
        }

        $actualCita->nom_mascota=$request->nom_mascota;
        $actualCita->nom_propietario=$request->nom_propietario;
        $actualCita->diagnostico=$request->diagnostico;
        $actualCita->fecha_registro=$request->fecha_registro;

        $actualCita->save();

        return response()->json(['mensaje'=>'se actualizo exitoso;'],201);

     }

     public function eliminar(int $id){

        $actualCita= Cita::find($id);

        if(!$actualCita){
            throw new Exception(
                'No existe esta cita',
                Response::HTTP_BAD_REQUEST
            );
        }

        $actualCita->delete();

        return response()->json(['mensaje'=>'se elimino de forma exitosa;'],201);

     }
}
