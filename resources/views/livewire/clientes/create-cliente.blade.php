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
                        <li class="px-2 text-gray-400"><a href="/" class="no-underline text-indigo">{{ __('Home') }}</a>
                        </li>
                        <li>/</li>
                        <li class="px-2 text-gray-400"><a href="{{ route('clientes') }}"> {{__('Clientes') }} </a></li>
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
                        <a title="Clientes"
                            class="inline-flex items-center m-2 font-medium px-2 py-2 leading-2 border-2 border-gray-200 hover:border-gray-100 bg-blue-500 text-white rounded-md hover:text-gray-200"
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


                {{-- Aqui formulario --}}

                <form method="POST" wire:submit.prevent="update">
                    <div class="px-8 pt-6 pb-8 mb-4 flex flex-col">
                        <div>
                            @if (session()->has('message'))
                                <div class="p-4 mb-4 bg-green-400 text-white rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="inline-block w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="-mx-3 md:flex mb-4">

                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="nome">
                                    Nome*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="nome" type="text"  placeholder="" wire:model="nome">
                                    <div class="error-message text-red-500">
                                        @error('nome')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="email">
                                    E-mail*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="email" type="text" placeholder="" wire:model="email">
                                    <div class="error-message text-red-500">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="telefone">
                                    Telefone
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="telefone" type="text"  placeholder="" wire:model="telefone">
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="celular">
                                    Celular*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="celular" type="text"  placeholder="" wire:model="celular">
                                    <div class="error-message text-red-500">
                                        @error('celular')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="logradouro">
                                    Logradouro*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="logradouro" type="text"  placeholder="" wire:model="logradouro">
                                    <div class="error-message text-red-500">
                                        @error('logradouro')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="numero">
                                    Número*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="numero" type="text"  placeholder="" wire:model="numero">
                                    <div class="error-message text-red-500">
                                        @error('numero')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="complemento">
                                    Complemento*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="complemento" type="text"  placeholder="" wire:model="complemento">
                                    <div class="error-message text-red-500">
                                        @error('complemento')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="bairro">
                                    Bairro*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="bairro" type="text"  placeholder="" wire:model="bairro">
                                    <div class="error-message text-red-500">
                                        @error('bairro')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="uf">
                                    UF*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="uf" type="text"  placeholder="" wire:model="uf">
                                    <div class="error-message text-red-500">
                                        @error('uf')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="cidade">
                                    Cidade*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="cidade" type="text" placeholder="" wire:model="cidade">
                                    <div class="error-message text-red-500">
                                        @error('cidade')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="cep">
                                    CEP*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="cep" type="text" placeholder="" wire:model="cep">
                                    <div class="error-message text-red-500">
                                        @error('cep')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="cpf">
                                    CPF*
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="cpf" type="text" placeholder="" wire:model="cpf">
                                    <div class="error-message text-red-500">
                                        @error('cpf')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="rg">
                                    RG
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="rg" type="text" placeholder="" wire:model="rg">
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="contato">
                                    Contato
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="contato" type="text" placeholder="" wire:model="contato">
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="telefone_contato">
                                    Telefone contato
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input
                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="telefone_contato" type="text" placeholder="" wire:model="telefone_contato">
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-4">
                            <div class="md:w-1/3 px-3 mb-4 md:mb-0 pt-4">
                                <label class="pt-2 tracking-wide text-black text-md font-medium mb-2" for="celular_contato">
                                    Celular contato
                                </label>
                            </div>
                            <div class="md:w-full px-3">
                                <input

                                    class="w-full bg-gray-100 text-black border border-gray-300 rounded py-3 px-4 mb-1 focus:border-blue-300 hover:border-red-300"
                                    id="celular_contato" type="text" placeholder="" wire:model="celular_contato">
                            </div>
                        </div>
                        <div>
                            @if (session()->has('message'))
                                <div class="p-4 mb-1 bg-green-400 text-white rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="inline-block w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                    <div class="md:flex mt-0 mb-0">

                        <div class="md:w-full">
                            <button
                                class="float-right bg-blue-500 text-white font-medium py-2 px-10 mt-2 mb-0 border-gray-200 hover:border-gray-100 rounded">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="inline-block w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293zM9 4a1 1 0 012 0v2H9V4z" />
                            </svg>{{ __('Salvar') }}
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </form>

        {{-- Fim formulario --}}

    </div>
</div>
</div>
</div>
