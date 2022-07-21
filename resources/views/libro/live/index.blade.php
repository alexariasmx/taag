<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Libro LiveWire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <a href=" {{route('libroLive.create')}} "
                class='inline-flex items-center px-4 py-2 bg-green-800 
                  border border-transparent rounded-md font-semibold 
                  text-xs text-white uppercase tracking-widest 
                  hover:bg-green-700 active:bg-green-900 focus:outline-none 
                  focus:border-green-900 focus:ring 
                  focus:ring-green-300 disabled:opacity-25 transition'
                >+ Agregar libro</a>
                <br>
                <br>
                @livewire('libro.libro')
            </div>
        </div>
    </div>
</x-app-layout>