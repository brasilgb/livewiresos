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
                        <li class="px-2 text-gray-400"><a href="/" class="no-underline text-indigo">{{ __('Home') }}</a></li>
                        <li>/</li>
                        <li class="px-2 text-gray-400"><a href="{{ route('clientes') }}"> {{__('Clientes') }} </a></li>
                        <li>/</li>
                        <li class="px-2 text-gray-500">{{ __('Cadastrar') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mb-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <div>
                    <a title="Cadastrar cliente"
                        class="inline-flex items-center font-medium px-2 py-2 leading-2 border-2 border-gray-200 bg-blue-500 text-white rounded-md hover:text-gray-200"
                        href="{{ route('clientes.create') }}"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="inline-block w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>{{ __('Cadastrar') }}
                    </a>
                </div>
                <div>
                    <div class="pt-0 relative mx-auto text-gray-600">
                        <input
                            class="border-2 border-gray-300 bg-white h-11 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="Buscar por cliente">
                        <button type="submit" class="absolute right-0 top-0 mt-4 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                           {{-- Aqui formulario --}}

                           <form>
                              <div class="px-8 pt-6 pb-8 mb-4 flex flex-col">
                                <div class="-mx-3 md:flex mb-4">
                                    <div class="md:w-1/2 px-3 mb-4 md:mb-0">
                                      <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="cliente">
                                        Nome do Cliente*
                                      </label>
                                      <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-1" id="cliente" type="text" placeholder="Nome do cliente">
                                      <div>
                                        <span class="text-red-500 text-xs italic">
                                          Please fill out this field.
                                        </span>
                                      </div>
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                      <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="email">
                                        E-mail*
                                      </label>
                                      <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-1" id="email" type="text" placeholder="seuemail@servidor.com">
                                    </div>
                                  </div>

                                  <div class="-mx-3 md:flex mb-4">
                                    <div class="md:w-1/2 px-3 mb-4 md:mb-0">
                                      <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="telefone">
                                        Telefone
                                      </label>
                                      <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-1" id="telefone" type="text" placeholder="">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                      <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="celular">
                                        Celular*
                                      </label>
                                      <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-1" id="celular" type="text" placeholder="">
                                    </div>
                                  </div>
  
                                  <div class="-mx-3 md:flex mb-4">
                                    <div class="md:w-5 px-3 mb-4 md:mb-0">
                                      <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="logradouro">
                                        Logradouro*
                                      </label>
                                      <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-1" id="logradouro" type="text" placeholder="Rua, avenida, estrada, linha, beco, etc...">
                                    </div>
                                    <div class="md:w-1/3 px-3">
                                      <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="numero">
                                        Número*
                                      </label>
                                      <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-1" id="numero" type="text" placeholder="">
                                    </div>
                                  </div>
  

                                <div class="-mx-3 md:flex mb-4">
                                  <div class="md:w-full px-3">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                                      Application Link*
                                    </label>
                                    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-1" id="application-link" type="text" placeholder="http://....">
                                  </div>
                                </div>
                                <div class="-mx-3 md:flex mb-2">
                                  <div class="md:w-1/2 px-3 mb-4 md:mb-0">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                                      Location*
                                    </label>
                                    <div>
                                      <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-1 rounded" id="location">
                                        <option>Abuja</option>
                                        <option>Enugu</option>
                                        <option>Lagos</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="md:w-1/2 px-3">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="job-type">
                                      Job Type*
                                    </label>
                                    <div>
                                      <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-1 rounded" id="job-type">
                                        <option>Full-Time</option>
                                        <option>Part-Time</option>
                                        <option>Internship</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="md:w-1/2 px-3">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                                      Department*
                                    </label>
                                    <div>
                                      <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-1 rounded" id="department">
                                        <option>Engineering</option>
                                        <option>Design</option>
                                        <option>Customer Support</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="-mx-3 md:flex mt-2">
                                  <div class="md:w-full px-3">
                                    <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                                      Button
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>

                           {{-- Fim formulario --}}
                   
            </div>
        </div>
    </div>
</div>
