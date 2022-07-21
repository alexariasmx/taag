<?php

namespace App\Http\Livewire\Libro;

use Livewire\Component;
use App\Models\libros\libro as libros;
use Livewire\WithPagination;

class Libro extends Component
{
    use WithPagination;

    public $misLibros;
    public $buscar;
    
    public function render()
    {
        return view('livewire.libro.libro',[
            'miLibro'=>libros::when($this->buscar, function($query,$buscar){
                return $query->where('titulo','LIKE', "%$buscar%");
            })->orderBy('id','desc')->paginate(15)
          ]);
    }

    public function destroy($id){
        libros::destroy($id);
    }

}
