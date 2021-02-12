<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="pt-4 font-semibold text-xl text-gray-800 leading-tight">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="inline-block w-8 h-8 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>{{ __('Clientes') }}
                </h2>
            </div>
            <div>
                <nav>
                    <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">
                        <li class="px-2 text-gray-400"><a href="/"
                                class="no-underline text-indigo">{{ __('Home') }}</a>
                        </li>
                        <li>/</li>
                        <li class="px-2 text-gray-400"><a href="{{ route('clientes') }}"> {{__('Clientes') }} </a>
                        </li>
                        <li>/</li>
                        <li class="px-2 text-gray-500">{{ __('Cadastrar') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-t-4 border-gray-300">


                <div class="flex justify-between border-b-2 border-gray-200">
                    <div>
                        <a title="Cadastrar cliente"
                            class="inline-flex items-center m-2 font-medium px-2 py-2 leading-2 border-2 border-gray-200 bg-blue-500 text-white rounded-md hover:text-gray-200"
                            href="{{ route('clientes') }}"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="inline-block w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" />
                        </svg>{{ __('Voltar') }}
                        </a>
                    </div>
                    <div>
                        <div class="m-2 pt-0 relative text-gray-600">
                            
                        </div>
                    </div>
                </div>

                ok

            </div>
        </div>
    </div>
</div>
