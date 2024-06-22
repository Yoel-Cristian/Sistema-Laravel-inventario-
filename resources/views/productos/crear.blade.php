<x-app-layout>

<div class="p-8 md:p-12 lg:px-10 lg:py-5 bg-slate-900/50">
  <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2 text-center">
    "NUEVO PRODUCTO"
  </h1>
</div>

<br>


<!-- component -->
<div class="max-w-lg mx-auto  bg-white rounded-lg shadow-md px-8 py-10 flex flex-col items-center">


  <div class="p-8 md:p-12 lg:px-10 lg:py-5 bg-slate-900/50">
    <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2 text-center">
      DATOS DEL PRODUCTOS
    </h1>
</div>




    <form action="{{route('producto.store')}}" method="POST" class="w-full flex flex-col gap-4">
        @csrf

      <div class="flex items-start flex-col justify-start">
        <label  class="text-sm text-gray-700 mr-2">Nombre:
        </label>
        <input type="text" name="nombre" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>

      <div class="flex items-start flex-col justify-start">
        <label  class="text-sm text-gray-700 mr-2">Precio:</label>
        <input  type="text" name="precio" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>

      <div class="flex items-start flex-col justify-start">
        <label  class="text-sm text-gray-700 mr-2">Descripcion:</label>
        <input  type="text" name="descripcion" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>

      <div class="flex items-start flex-col justify-start">
        <label class="text-sm text-gray-700 mr-2">Categoria:</label>
        <input type="text" name="categoria" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>

      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md shadow-sm">GUARDAR</button>
      <button type="button" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md shadow-sm">           <a href="{{ route('producto.principal') }}">CANCELAR</a></button>

      

    </form>


  </div>



</x-app-layout>
