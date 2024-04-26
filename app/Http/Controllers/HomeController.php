<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Incidentes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getReportar(){


        $categorias = Categoria::where('project_id',1)->get();
        return view('reportar')->with(compact('categorias'));

    }


    public function postReportar(Request $request){

        $rules = [
            'categoria' => 'sometimes|exists:categorias,id',
            'prioridad' => 'required|in:M,N,A',
            'title' => 'required|min:5',
            'descripcion' => 'required|min:15'


        ];

        $this->validate($request,$rules);

        $incidencia = new Incidentes();
        $incidencia->categoria_id = $request->input('categoria') ?: null;
        $incidencia->prioridad = $request->input('prioridad');
        $incidencia->title = $request->input('title');
        $incidencia->descripcion = $request->input('descripcion');
        $incidencia->client_id = auth()->user()->id;
        $incidencia->save();


        return back();




    }



}
