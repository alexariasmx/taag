<div>

    <div class="container">

    <input type="text" wire:model='buscar' size="30" placeholder="Titulo">

    <table class="table-fixed">
        <thead>
          <tr>
            <th class="w-1/4 px-4 py-2">Autor</th>
            <th class="w-1/4 px-4 py-2">Titulo</th>
            <th class="w-1/4 px-4 py-2">Edición</th>
            <th class="w-1/4 px-4 py-2">Publicación</th>
            <th class="w-1/4 px-4 py-2 col-span-2">Acción</th>
          </tr>
            </thead>
            <tbody>
                @foreach ($miLibro as $item )
              <tr>
                <th scope="row">{{$item->autor}}</th>
                <td>{{$item->titulo}}</td>
                <td>{{$item->edicion}}</td>
                <td>{{$item->datosDePublicación}}</td>

                <td><a href=" {{ route('libroLive.edit', $item->id) }} " class='
                  inline-flex items-center px-4 py-2 bg-sky-800 
                  border border-transparent rounded-md font-semibold 
                  text-xs text-white uppercase tracking-widest 
                  hover:bg-sky-700 active:bg-sky-900 focus:outline-none 
                  focus:border-sky-900 focus:ring 
                  focus:ring-sky-300 disabled:opacity-25 transition'>Editar</a>
                </td>
                @csrf
                <td>
                <button class='
                    inline-flex items-center px-4 py-2 bg-red-800 
                    border border-transparent rounded-md font-semibold 
                    text-xs text-white uppercase tracking-widest 
                    hover:bg-red-700 active:bg-sky-900 focus:outline-none 
                    focus:border-red-900 focus:ring 
                    focus:ring-red-300 disabled:opacity-25 transition'
                    type="submit" wire:click='destroy({{$item->id}})'>
                        Eliminar
                    </button>
                  </td>
                @endforeach
            </tbody>
    </table>

    @if ($miLibro)
    {{$miLibro->links()}}
        @else

    @endif
</div>    

</div>
