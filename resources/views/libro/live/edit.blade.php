<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Libro LiveWire - Editar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="container">
                    <form action=" {{route('libroLive.update', $miLibro->id)}} " method="post">
                        @csrf
                        @method('patch')
                        <table class="table-fixed">
                        <tbody>
                          <tr>
                            <td class="border px-4 py-2">Autor</td>
                            <td class="border px-4 py-2"><input type="text" name="autor" id="autor" value=" {{$miLibro->autor}} ">
                                @error('autor') {{$message}} @enderror
                        </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Titulo</td>
                            <td class="border px-4 py-2"><input type="text" name="titulo" id="titulo" value=" {{$miLibro->titulo}} ">
                                @error('titulo') {{$message}} @enderror
                            </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Edición</td>
                            <td class="border px-4 py-2"><input type="text" name="edicion" id="edicion" value=" {{$miLibro->edicion}} ">
                                @error('edicion') {{$message}} @enderror
                            </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Datos de Publicación</td>
                            <td class="border px-4 py-2"><input type="text" name="datosDePublicacion" id="datosDePublicacion" value=" {{$miLibro->datosDePublicación}} ">
                                @error('datosDePublicacion') {{$message}} @enderror
                            </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Tipo de Contenido</td>
                            <td class="border px-4 py-2"><input type="text" name="tipoDeContenido" id="tipoDeContenido" value=" {{$miLibro->tipoDeContenido}} ">
                                @error('tipoDeContenido') {{$message}} @enderror
                            </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Restricciones</td>
                            <td class="border px-4 py-2"><input type="text" name="restricciones" id="restricciones" value=" {{$miLibro->restricciones}} ">
                                @error('restricciones') {{$message}} @enderror
                            </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Materia</td>
                            <td class="border px-4 py-2"><input type="text" name="materia" id="materia" value=" {{$miLibro->materia}} ">
                                @error('materia') {{$message}} @enderror
                            </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Proveedor</td>
                            <td class="border px-4 py-2"><input type="text" name="proveedor" id="proveedor" value=" {{$miLibro->proveedor}} ">
                                @error('proveedor') {{$message}} @enderror
                            </td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2">Imagen</td>
                            <td class="border px-4 py-2"><input type="file" name="imagen" id="imagen"></td>
                          </tr>
                          <input type="hidden" value="vacio" name="imagen2" id="imagen2" value=" {{$miLibro->imagen}} ">
                        </tbody>
                      </table>
                        <br>
                      <button class='
                      inline-flex items-center px-4 py-2 bg-green-800 
                      border border-transparent rounded-md font-semibold 
                      text-xs text-white uppercase tracking-widest 
                      hover:bg-green-700 active:bg-green-900 focus:outline-none 
                      focus:border-green-900 focus:ring 
                      focus:ring-green-300 disabled:opacity-25 transition'
                      type="submit">
                          Actualizar
                      </button>

                      <a href=" {{route('libroLive.index')}} "
                      class='
                      inline-flex items-center px-4 py-2 bg-yellow-800 
                      border border-transparent rounded-md font-semibold 
                      text-xs text-white uppercase tracking-widest 
                      hover:bg-yellow-700 active:bg-yellow-900 focus:outline-none 
                      focus:border-yellow-900 focus:ring 
                      focus:ring-yellow-300 disabled:opacity-25 transition'>
                      Regresar</a>
                      <br>
                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>