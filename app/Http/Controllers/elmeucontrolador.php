<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tcoches;
use Illuminate\Validation\Rules\Numeric;
use Illuminate\Database\Eloquent\Model;

class elmeucontrolador extends Controller
{
public function f_formulari()
    {
        return view('inserir');
    }


public function f_insert(Request $request)
    {
        // 1. Validar los datos recibidos
        $request->validate([
            'bastidor' => 'required|unique:tcoches',
            'marca'    => 'required',
            'anys'     => 'required|numeric'
        ],
        [
        'bastidor.required'=>"El bastidor es obligatorio",
        'bastidor.unique'=>"El bastidor ya existe",
        'marca.required'=>"Debes de introducir la marca",
        'anys.required'=>"Debes de introducir el año del vehiculo",
        'anys.numeric'=>"Tiene que ser nu8merico si so si"

        ]
        );

$todo=new Tcoches();
$todo->bastidor=$request->bastidor;
$todo->marca=$request->marca;
$todo->anys=$request->anys;
  $todo->save();
  
// 3. Redirigir hacia atrás
        return redirect()->route("datos_insertar")->with('success', 'Cotxe guardat amb èxit!');
    }
    


    public function f_listar()
    {
    //recuperar datos
       $dades=tcoches::all();
        
    return view('listar', compact('dades'));   


    }

    public function f_consultardetalle($bastidor){

    // 1. Iniciamos una consulta sobre la tabla tcoches
    $fila = tcoches::query();
    // 2. Buscamos el registro cuya columna 'bastidor' coincida con la enviada por URL
    $fila->where('bastidor', 'like', "$bastidor");
    // 3. Ejecutamos la consulta y obtenemos los datos
    $dades = $fila->get();
    //dd($dades);    //per a mirar les dades
    // 4. Cargamos la vista pasándole los datos del coche
    return view('consultardetalle',compact('dades'));

    }


}