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
         $dades=tcoches:: all();
        return view('inserir', compact("dades")); 

        // return view('inserir');
    }



public function f_insert(Request $request)
    {
        // 1. Validar los datos recibidos
        $request->validate([
            'matricula' => 'required|unique:tcoches',
            'marca'    => 'required',
            'modelo'    => 'required',
            'anyo'     => 'required|numeric'
        ],
        [
        'matricula.required'=>"Debes itroducir una matricula",
        'matricula.unique'=>"La matricula ya existe",
        'marca.required'=>"Debes de introducir la marca",
        'modelo.required'=>"Debes introducir el modelo del vehículo",
        'anyo.required'=> 'Debes introducir el año del vehículo',
        'anyo.numeric'=>"Tiene que ser numerico si so si"

        ]
        );

$todo=new Tcoches();
$todo->matricula=$request->matricula;
$todo->marca=$request->marca;
$todo->modelo=$request->modelo;
$todo->anyo=$request->anyo;
$todo->save();

  
// 3. Redirigir hacia atrás
return redirect()->route("datos_insertar")->with('success', 'Coche guardado con exito!!');
    }
    

//muestra todos los coches
    public function f_listar()
    {
    //recuperar datos
       $dades=tcoches::all();
        
    return view('listar', compact('dades'));   


    }

    public function f_consultardetalle($matricula){

    // // 1. Iniciamos una consulta sobre la tabla tcoches
    // $fila = tcoches::query();
    // // 2. Buscamos el registro cuya columna 'bastidor' coincida con la enviada por URL
    // $fila->where('matricula', 'like', $matricula);
    // // 3. Ejecutamos la consulta y obtenemos los datos
    // $dades = $fila->get();
    // //dd($dades);    //per a mirar les dades
    // // 4. Cargamos la vista pasándole los datos del coche

    // // Si la matrícula no existe en la BBDD, redirige a la lista
    // if ($dades->isEmpty()) {
    //     return redirect()->route('dades_consultar')->with('error', 'No se ha encontrado ningun vehiculo');
    // }
    // return view('consultardetalle',compact('dades'));


    // 1. Busquem el registre per la columna 'matricula'
    $dades = Tcoches::where('matricula', $matricula)->get();

    // 2. Si la matrícula no existeix a la BD (retorna buit), redirigeix a la llista amb un missatge
    if ($dades->isEmpty()) {
        return redirect()->route('dades_consultar')->with('error', 'No existe la matricula introducida');
    }

    // 3. Si existeix, carreguem la vista de detall
    return view('consultardetalle', compact('dades'));
    }

public function f_formulari_buscar()
{
    return view('buscar');
}




public function f_buscar(Request $request){
    $request->validate(
// 1. Validamos que introduzca una matrícula
    ['algo' => 'required'],
    ['algo.required' => 'Introduce una de estas opciones-> Matricula, marca, modelo o Año']
);

        $busqueda = $request->algo;

        // 2. Consultamos la BBDD filtrando por matrícula
        $dades = Tcoches::where('matricula', 'like', "%{$busqueda}%")
                    ->orWhere('marca', 'like', "%{$busqueda}%")
                    ->orWhere('modelo', 'like', "%{$busqueda}%")
                    ->paginate(5); 
        // 3. Devolvemos la vista con los resultados
        return view('buscarresultado', compact('dades', 'busqueda'));

    }

public function f_borrar(){
    $dades=Tcoches::all();
    return view('borrar', compact('dades'));
    
}

public function f_borrarfila($matricula){
$fila = Tcoches::query();
$fila->where('matricula','like', "%{$matricula}");
$fila->delete();
return redirect()->route('datos_borrar')->with('success', 'Eliminado correctamente');

}


public function f_modificar(){
    $dades=Tcoches::all();
    return view('modificar', compact('dades'));
}

public function f_modificarfila($matricula){
    $fila = Tcoches::query();
    $fila->where('matricula', 'like', "$matricula");
    $fila = $fila->get();
    return view('modificarfila',compact('fila'));

}

public function f_actualimodificarfila(Request $request, Tcoches $fila){

  $request->validate([
            'marca'    => 'required',
            'modelo'    => 'required',
            'anyo'     => 'required|numeric'
        ],
        [
        'marca.required'=>"Debes de introducir la marca",
        'modelo.required'=>"Debes introducir el modelo del vehículo",
        'anyo.required'=> 'Debes introducir el año del vehículo',
        'anyo.numeric'=>"Tiene que ser nu8merico si so si"

        ]
        );


        $fila->matricula=$request->matricula;
        $fila->matricula=$request->matricula;
        $fila->marca=$request->marca;
        $fila->modelo=$request->modelo;
        $fila->anyo=$request->anyo;
        $fila->update();
        return redirect()->route('datos_actualimodificarfila',$fila)->with('success','Modificacion con exito');


}
}