<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use DB;
class EstudianteController extends Controller
{
    //crear datos en la bd
    public function Crear_estudiante(){
        $nombre = 'Tania';
        $apellido = 'Cruz';
        $documento = '7585444';
        $telefono = 978888165;
        $curso = 'Primero A';
        $activo = true;

    //Insertar datos en la tabla estudiantes
        //Utilizando Eloquent
        $estudiantes=Estudiante::create([
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'documento'=>$documento,
            'telefono'=>$telefono,
            'curso'=>$curso,
            'activo'=>$activo,
        ]);
        return response()->json(['message'=>'Estudiante creado correctamente','estudiantes'=>$estudiantes]);
        }
        //funcion para ver todos los estudiantes
        public function mostrar_estudiantes(){
            $estudiantes = Estudiante::all();
            return response()->json(['estudiantes.response', compact('estudiantes')]);
        }

       
        public function buscar_estudiante($id) {
            $estudiantes = Estudiante::find($id);
            return response()->json(['message' => 'El estudiante buscado es:', 'estudiantes' => $estudiantes]);
        }
        
    
        public function borrar_estudiante($id){
            // Busca al estudiante con el 'id' proporcionado en la tabla 'estudiantes'
            $estudiante = Estudiante::where('id', $id)->first();
        
            // Verifica si el estudiante fue encontrado
            if ($estudiante === null) {
                return response()->json(['message' => 'El estudiante no se puede eliminar porque no existe'], 404);
            } else {
                 $estudiante->delete();
               return response()->json(['message' => 'Estudiante eliminado correctamente']);
            }
        }
        public function modificar_estudiante($id){
                $estudiantes = Estudiante::where('id',$id)
                ->first();
                $nombre = 'Susana';
                $apellido = 'Ramirez';
                $documento = '8975111';
                $telefono = 975888444;
                $curso = 'Tercero B';
                $activo = true;
                $estudiantes ->update([
                    'nombre'=>$nombre,
                    'apellido'=>$apellido,
                    'documento'=>$documento,
                    'telefono'=>$telefono,
                    'curso'=>$curso,
                    'activo'=>$activo,
        ]);
        return response()->json(['message'=>'Estudiante actualizado correctamente', 'estudiantes'=> $estudiantes]);
        }
    
}
