<x-app-layout>
    <div class="p-8 md:p-12 lg:px-10 lg:py-5 bg-slate-900/50">
        <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2 text-center">
            Registrar los nuevos roles
        </h1>
    </div>

    <div class='flex items-center justify-center min-h-screen bg-gradient-to-br from-teal-100 via-teal-300 to-teal-500'>
        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
            <div class='max-w-md mx-auto space-y-6'>
                <form action="{{ route('role.store') }}" method="POST" class="w-full flex flex-col gap-4">
                    @csrf
                    <div class="flex items-start flex-col justify-start">
                        <label class="text-sm text-gray-700 mr-2 uppercase font-bold">Nombre del rol:</label>
                        <input type="text" name="nombre" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>

                    <div class="flex items-start flex-col justify-start">
                        <label class="text-sm text-gray-700 mr-2 uppercase font-bold">Descripción:</label>
                        <input type="text" name="descripcion" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md shadow-sm">Guardar</button>
                    <button type="button" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md shadow-sm">
                        <a href="{{ route('role.principal') }}">Cancelar</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
