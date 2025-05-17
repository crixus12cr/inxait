<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-8 bg-gray-50 p-4 rounded-lg border border-gray-200 flex justify-center">
                        <form action="{{ route('dashboard.export') }}" method="GET">
                            <x-primary-button type="submit"
                                class="px-6 flex items-center bg-green-600 hover:bg-green-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                {{ __('Descargar Excel') }}
                            </x-primary-button>
                        </form>
                    </div>

                    <!-- Tabla de resultados -->
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
                        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{ __('Cédula') }}
                                    </th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{ __('Nombre') }}
                                    </th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{ __('Apellido') }}
                                    </th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{ __('Email') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 border-t border-gray-100">
                                @forelse($users ?? [] as $user)
                                    <tr class="hover:bg-gray-50 cursor-pointer">
                                        <td class="px-6 py-4">{{ $user->document_number }}</td>
                                        <td class="px-6 py-4">{{ $user->name }}</td>
                                        <td class="px-6 py-4">{{ $user->last_name }}</td>
                                        <td class="px-6 py-4">{{ $user->email }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                            <div class="flex flex-col items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-12 w-12 text-gray-400 mb-2" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                                </svg>
                                                <span
                                                    class="font-medium">{{ __('No hay registros disponibles') }}</span>
                                                <span
                                                    class="text-sm mt-1">{{ __('Los registros aparecerán aquí cuando estén disponibles') }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Paginación -->
                    <div class="mt-6 flex items-center justify-between">
                        <div class="text-sm text-gray-700">
                            @if (isset($users) && $users->total() > 0)
                                {{ __('Mostrando') }} <span class="font-medium">{{ $users->firstItem() }}</span>
                                {{ __('a') }} <span class="font-medium">{{ $users->lastItem() }}</span>
                                {{ __('de') }} <span class="font-medium">{{ $users->total() }}</span>
                                {{ __('resultados') }}
                            @else
                                {{ __('No hay resultados') }}
                            @endif
                        </div>
                        <div>
                            @if (isset($users))
                                {{ $users->links() }}
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
