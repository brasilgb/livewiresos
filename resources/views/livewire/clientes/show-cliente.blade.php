<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mb-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between bg-gray-300">
                    <div>
                                        <button title="Cadastrar cliente"
                                        class="inline-flex items-center font-medium px-2 py-2 leading-2 border-2 border-gray-200 bg-blue-500 text-white rounded-md hover:text-gray-200">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="inline-block w-5 h-5 mr-1"
                                        >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                                        />
                                        </svg>Cadastrar
                                    </button>
                    </div>
                    <div>3</div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-gray-300">
                        <tr>
                            <th class="px-2 py-2 text-left text-base font-bold text-grady-500">#</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500">Cliente</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500">E-mail</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500">Telefone</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500 w-8"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{$cliente->id_cliente}}</td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{$cliente->cliente}}</td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{$cliente->email}}</td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{$cliente->telefone}}</td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                <div class="flex space-x-1">
                                    <button title="Ordens de serviço do cliente"
                                        class="px-2 py-1 font-semibold border-2 border-gray-200 bg-gray-500 text-white rounded-md hover:text-gray-200">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="w-5"
                                        >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                                        />
                                        </svg>
                                    </button>
                                    <button title="Editar dados do cliente"
                                        class="px-2 py-1 font-semibold border-2 border-gray-200 bg-blue-500 text-white rounded-md hover:text-gray-200">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="w-5"
                                        >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                        />
                                        </svg>
                                    </button>
                                    <button title="Excluir este cliente"
                                        class="px-2 py-1 font-semibold border-2 border-gray-200 bg-red-700 text-white rounded-md hover:text-gray-200">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="w-5"
                                        >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                        />
                                          </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-4 py-4 mt-4 border-t-2 border-gray-200">
                    {{$clientes->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
