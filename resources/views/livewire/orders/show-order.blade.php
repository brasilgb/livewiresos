<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="pt-4 font-semibold text-xl text-gray-800 leading-tight">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block w-8 h-8 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>{{ __('Ordens') }}
                </h2>
            </div>
            <div>
                <nav>
                    <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">
                        <li class="px-2 text-gray-400"><a href="#" class="no-underline text-indigo">{{ __('Home') }}</a></li>
                        <li>/</li>
                        <li class="px-2 text-gray-500">{{ __('Ordens') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="flex justify-between border-b-2 border-gray-200">
                    <div>
                        <a title="Cadastrar ordere" class="inline-flex items-center m-2 font-medium px-2 py-2 leading-2 border-2 border-gray-200 bg-blue-600 hover:bg-blue-700 text-white rounded-md hover:text-gray-200" href="{{ route('orders.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>{{ __('Cadastrar') }}
                        </a>
                    </div>
                    <div>
                        <div class="m-2 pt-0 relative text-gray-600">
                            <input class="border-2 border-gray-300 bg-white h-11 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Buscar por ordere" wire:model="search">
                            <button type="submit" class="absolute right-0 top-0 mt-4 mr-4">
                                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-gray-300">
                        <tr>
                            <th class="px-2 py-2 text-left text-base font-bold text-grady-500">#</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500">Ordem</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500">Entrada</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500">Previsão</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500">Status</th>
                            <th class="px-2 py-3 text-left text-base font-bold text-grady-500 w-8"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($orders as $order)
                        <tr>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{$order->id_ordem}}
                            </td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{$order->clients->nome}}
                            </td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{formatDateTime($order->created_at, "d/m/Y")}}
                            </td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{formatDateTime($order->previsao, "d/m/Y")}}
                            </td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                {{statusOrder($order->status)}}
                            </td>
                            <td class="px-2 py-2 text-left text-base font-normal text-grady-500 whitespace-normal">
                                <div class="flex space-x-1">
                                    <a title="Editar dados do ordere" href="{{ route('orders.edit', ['order' => $order->id_ordem]) }}" class="px-2 py-1 font-semibold border-2 border-gray-200 bg-blue-600 hover:bg-blue-700 text-white rounded-md hover:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    <button class="px-2 py-1 font-semibold border-2 border-gray-200 bg-red-600 hover:bg-red-700 text-white rounded-md hover:text-gray-200" wire:click="confirmOrderDeletion( {{$order->id_ordere}} )" wire:loading.attr="disabled">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-4 py-4 mt-4 border-t-2 border-gray-200">

                    {{$orders->links()}}
                </div>
            </div>

            <!-- Delete Ordere Confirmation Modal -->
            <x-jet-dialog-modal wire:model="confirmingOrderDeletion">

                <x-slot name="title">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block w-5 h-5 mr-1 mb-1">
                        >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    {{ __('Deletar Ordere') }}
                </x-slot>

                <x-slot name="content">
                    <div class="text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block w-10 h-10 mr-1">
                            >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        {{ __('Têm certeza que deseja deletar esta ordem de serviço da base de dados do sistema?') }}
                    </div>
                </x-slot>

                <x-slot name="footer">
                    <x-jet-secondary-button wire:click="$set('confirmingOrderDeletion', false)" wire:loading.attr="disabled">
                        {{ __('Cancelar') }}
                    </x-jet-secondary-button>

                    <x-jet-danger-button class="ml-2" wire:click="deleteOrder( {{ $confirmingOrderDeletion}} )" wire:loading.attr="disabled">
                        {{ __('Sim, Deletar') }}
                    </x-jet-danger-button>
                </x-slot>
            </x-jet-dialog-modal>

        </div>
    </div>
</div>