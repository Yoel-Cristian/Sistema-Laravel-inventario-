<x-app-layout>
    <div class="p-8 md:p-12 lg:px-10 lg:py-5 bg-slate-900/50">
        <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2 text-center">
            Aquí se va a mostrar todos los roles
        </h1>
    </div>

    <br>
    <div class="container size-11/12 m-auto">
        <a href="{{ route('role.crear') }}">
            <button
                class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true">Nuevo Registro
            </button>
        </a>
        <br>
        <br>
        <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto md:relative">
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nombre</th>
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Descripción</th>
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Operaciones</th>
                </tr>
            </thead>
            <tbody class="block md:table-row-group">
                @foreach ($roles as $role)
                <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$role->nombre}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$role->descripcion}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <div class="flex space-x-2">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">
                                <a href="{{route('role.mostrar', $role->id)}}">Ver</a>
                            </button>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
                                <a href="{{route('role.editar', $role)}}">Editar</a>
                            </button>
                            <form action="{{route('role.borrar', $role)}}" method="post">
                                @method('delete')
                                @csrf
                                @if($role->deleted_at)
                                    <button type="button" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-grey-500 rounded">
                                        <a href="{{route('activarole', $role->id)}}">Activar</a>
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" type="submit" onclick="if(!confirm('¿Desea eliminar a: {{$role->nombre}}?')){return false;}">Borrar</button>
                                @else
                                <button type="button"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                                        <a href="{{route('desactivarole', $role->id)}}">Desactivar</a>
                                    </button>
                                @endif
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
    {{ $roles->links() }}
</x-app-layout>
