<x-app-layout>
    <div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
            <div class='max-w-md mx-auto space-y-6'>
                <form action="{{ route('producto.update', $id->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <h2 class="text-2xl font-bold">Actualizar datos del producto {{ $id->id }}</h2>
                    <hr class="my-6">
                    <label class="uppercase text-sm font-bold opacity-70">Nombre</label>
                    <input type="text" name="nombre" value="{{ $id->nombre }}"
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">

                    <label class="uppercase text-sm font-bold opacity-70">Precio</label>
                    <input type="text" name="precio" value="{{ $id->precio }}"
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">


                    <label class="uppercase text-sm font-bold opacity-70">Descripcion</label>
                    <input type="text" name="descripcion" value="{{ $id->descripcion }}"
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <label class="uppercase text-sm font-bold opacity-70">Categoria</label>
                    <input type="text" name="categoria" value="{{ $id->categoria }}"
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <label class="uppercase text-sm font-bold opacity-70">Categoria Tabla</label>
                    <select name="categoria_id"
                        class="w-full p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        <option selected="" value="{{ $categoria_actual->id }}">{{ $categoria_actual->nombre }}</option>
                        @foreach ($categorias as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                        @endforeach
                    </select>
                    <input type="submit"
                        class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                        value="Actualizar">
                </form>
                <a href="{{ route('producto.principal') }}">
                    <button
                        class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300">Cancelar</button>
                </a>
            </div>
        </div>
    </div>



    </x-app-layout>
    