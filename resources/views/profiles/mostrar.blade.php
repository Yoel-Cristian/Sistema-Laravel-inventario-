<x-app-layout>
    <div class="p-8 md:p-12 lg:px-10 lg:py-5 bg-slate-900/50">
        <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2 text-center">
            Perfil: {{$profile->id}} ({{$profile->cargo}})
        </h1>
    </div>

    <div class="container mx-auto mt-6">
        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">Detalles del perfil</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">ID del perfil: {{$profile->id}}</p>
        </div>

        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Cargo</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2">{{$profile->cargo}}</dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Biografía</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2">{{$profile->biografia}}</dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Usuario</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2">
                        ID: {{$profile->user_id}}
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Operaciones</dt>
                    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <div class="flex gap-4">
                            <a href="{{ route('profile.principal') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                                Volver
                            </a>
                            <a href="{{ route('profile.editar', $profile) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Editar
                            </a>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-app-layout>
