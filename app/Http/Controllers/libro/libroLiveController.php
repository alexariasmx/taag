<?php

namespace App\Http\Controllers\libro;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Libro\Libro;
use Illuminate\Http\Request;
use App\Models\libros\libro as miLibroModel;

class libroLiveController extends Controller
{

    public function index()
    {
        return view('libro.live.index');
    }


    public function create()
    {
        return view('libro.live.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'autor'=>['required'],
            'titulo'=>['required'],
            'edicion'=>['required','integer'],
            'datosDePublicacion'=>['required'],
            'tipoDeContenido'=>['required'],
            'restricciones'=>['required'],
            'materia'=>['required'],
            'proveedor'=>['required'],
        ]);

        $libro= new miLibroModel;
        $libro->autor=$request->input('autor');
        $libro->titulo=$request->input('titulo');
        $libro->edicion=$request->input('edicion');
        $libro->datosDePublicación=$request->input('datosDePublicacion');
        $libro->tipoDeContenido=$request->input('tipoDeContenido');
        $libro->restricciones=$request->input('restricciones');
        $libro->materia=$request->input('materia');
        $libro->proveedor=$request->input('proveedor');
        $libro->imagen=$request->input('imagen2');
        $libro->save();

        return redirect('libroLive');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $miLibro=miLibroModel::find($id);
        return view('libro.live.edit',compact('miLibro'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'autor'=>['required'],
            'titulo'=>['required'],
            'edicion'=>['required','integer','min:4'],
            'datosDePublicacion'=>['required'],
            'tipoDeContenido'=>['required'],
            'restricciones'=>['required'],
            'materia'=>['required'],
            'proveedor'=>['required'],
        ]);

        $libro= miLibroModel::find($id);
        $libro->autor=$request->input('autor');
        $libro->titulo=$request->input('titulo');
        $libro->edicion=$request->input('edicion');
        $libro->datosDePublicación=$request->input('datosDePublicacion');
        $libro->tipoDeContenido=$request->input('tipoDeContenido');
        $libro->restricciones=$request->input('restricciones');
        $libro->materia=$request->input('materia');
        $libro->proveedor=$request->input('proveedor');
        $libro->imagen=$request->input('imagen2');
        $libro->save();

        return redirect('libroLive');
    }

}
