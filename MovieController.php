<?php
namespace App\Http\Controllers;
Use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    function index(){
        $movies= Movie::all();
        return response()->json($movies, 200);
    }
    function showOneMovie(Request $request, $id){
        $movie= Movie::find($id);
        return response()->json($movie, 200);
    }

    function createMovie(Request $request){
        $data = $request->all();
        $movie=Movie::create([
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion'],
            'genero' => $data['genero'],
            'fecha_lanzamiento' => $data['fecha_lanzamiento'],
            'imagen' => $data['imagen']
        ]);
        return response()->json($movie, 201);
    }

}