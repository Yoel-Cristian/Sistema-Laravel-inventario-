<x-app-layout>
  <div class="p-8 md:p-12 lg:px-10 lg:py-5 bg-slate-900/50">
      <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2 text-center">
          Categoría: {{$categoria->id}} ({{$categoria->nombre}})
      </h1>
  </div>

  <div class="container mx-auto">
      <div class="mt-6">
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <h3 class="col-span-3 text-base font-semibold leading-7 text-gray-900">Detalle de la categoría</h3>
              <dt class="text-sm font-medium leading-6 text-gray-900">Nombre:</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2">{{$categoria->nombre}}</dd>

              <dt class="text-sm font-medium leading-6 text-gray-900">Descripción:</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2">{{$categoria->descripcion}}</dd>

              <div class="col-span-3">
                  <div class="flex gap-4 mt-4">
                      <a href="{{ route('categoria.principal') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                          Volver
                      </a>
                      <a href="{{ route('categoria.editar', $categoria) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                          Editar
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
