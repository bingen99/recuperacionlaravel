<?php

namespace App\Http\Controllers;


use App\Models\alumnomodel;
use Illuminate\Http\Request;


class alumnocontroller extends Controller
{
    public function getAll(Request $request)
    {
        return alumnomodel::all();
    }

    public function getbyid(Request $request, $id)
    {
        return alumnomodel::find($id);
    }

    public function delete(Request $request, $id)
    {
        $modelo = alumnomodel::find($id);

        if ($modelo) {
            $modelo->delete();
            return response()->json(['message' => 'El alumno ha sido eliminado correctamente'], 200);
        } else {
            return response()->json(['error' => 'No se ha encontrado el alumno que desea eliminar'], 404);
        }
    }

    public function post(Request $request)
    {
        $alumno = new alumnomodel;

        $alumno->name = $request->input('name');
        $alumno->phone = $request->input('phone');
        $alumno->age = $request->input('age');
        $alumno->password = $request->input('password');
        $alumno->mail = $request->input('mail');
        $alumno->genre = $request->input('genre');

        $alumno->save();

        return response()->json(['message' => 'Alumno creado con exito'], 201);
    }


    public function put(Request $request, $id)
    {
        $alumno = alumnomodel::find($id);

        $alumno->name = $request->name;
        $alumno->phone = $request->phone;
        $alumno->age = $request->age;
        $alumno->password = $request->password;
        $alumno->mail = $request->mail;
        $alumno->genre = $request->genre;

        $alumno->save();

        return response()->json(['message' => 'Alumno modificado con exito'], 200);
    }
}
