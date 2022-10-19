<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogodocente;

class BuscarhController extends Controller
{

    
    //
    public function datos(Request $request){

        $movies = [];

        if($request->has('q'))
            $search = $request->q;
            $movies =Catalogodocente::select("apellidos_empleado", "nombre_empleado")
            		->where('nombre_empleado', 'LIKE', "%$search%")
            		->get();
        
        return response()->json($movies);


      /*  $search = $request->get('term');
      
          $result = Catalogodocente::where('apellidos_empleado','LIKE','%'.$term.'%')->get();
 
          return response()->json($result);*/
      /*  $term = $request->get('term');
        $querys = Catalogodocente::where('nombre_empleado','LIKE','%'.$term.'%')->get();

        $data = [];

        foreach($querys as $query){
            $data[]=[
                'label' => $query-> nombre_empleado
            ];
        }

        return $data;*/

    }
}
