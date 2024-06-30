<x-app-layout>
    <div class="p-8 md:p-12 lg:px-10 lg:py-5 bg-slate-900/50">
        <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2 text-center">
            Editar un estudiante
        </h1>
    </div>

    <div class='flex items-center justify-center min-h-screen bg-gradient-to-br from-teal-100 via-teal-300 to-teal-500'>
        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
            <div class='max-w-md mx-auto space-y-6'>
                <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
                    @csrf
                    @method('put')

                    <h2 class="text-2xl font-bold">Actualizar datos del estudiante {{$estudiante->id}}</h2>
                    <p class="my-4 opacity-70">Modifique los datos que necesite</p>
                    <hr class="my-6">

                    <label class="uppercase text-sm font-bold opacity-70">Nombre:</label>
                    <input type="text" value="{{$estudiante->nombre}}" class="w-full p-3 mt-2 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none" name="nombre">

                    <label class="uppercase text-sm font-bold opacity-70">Grado:</label>
                    <input type="text" value="{{$estudiante->grado}}" class="w-full p-3 mt-2 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none" name="grado">

                    <label class="uppercase text-sm font-bold opacity-70">Paralelo:</label>
                    <input type="text" value="{{$estudiante->paralelo}}" class="w-full p-3 mt-2 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none" name="paralelo">

                    <input type="submit" class="w-full py-3 px-6 mt-4 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded shadow-sm" value="Guardar Cambios">
                    <button type="button" class="w-full py-3 px-6 mt-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded shadow-sm">
                        <a href="{{ route('estudiantes.principal') }}">Cancelar</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
