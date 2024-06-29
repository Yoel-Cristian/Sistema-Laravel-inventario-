
<x-app-layout>
    <div class="container size-1/2 m-auto">
        <div class="px-4 sm:px-0">
            <h1 class="text-base font-semibold leading-7 text-gray-900">"El ID del producto es: " {{ $producto->id }}</h1>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detalles del Producto</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Nombre:</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->nombre }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Precio</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->precio }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Descripcion</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->descripcion }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Categoria</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->categoria }}</dd>
                </div>
                <div class="button-link"
                    style="display: flex; align-items: center; justify-content: start; gap: 10px; margin-top: 20px;">
                    <button class="button bg-purple-500 hover:bg-purple-700 text-white font-bold py-1 px-2 rounded">
                        <a href="{{ route('producto.principal') }}" class="link">Volver</a>
                    </button>
                    <button
                        class="button bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">  <a href="{{ route('producto.editar',$producto) }}" class="link">Editar</a></button>
 

                        <form
                        action="{{ route('producto.borrar', $producto->id) }}" method="POST">
                        @method('delete') <!-- indicar el uso del método delete -->
                        @csrf

                            <button type="submit"
                                class="text-slate-800 hover:text-red-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center"
                                onclick="if(confirm('¿Confirma eliminar?')){document.getElementById('elimina-prod-{{ $producto->id }}').submit()}">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </span>
                            </button>
              
                    </form>







                </div>


            </dl>


        </div>




    </div>








   


    </x-app-layout>
    