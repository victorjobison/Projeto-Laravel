<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Appointments') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full">
                <div class="sm:flex sm:items-center flex items-center justify-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Appointments') }}</h1>
                        <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Appointments') }}.</p>
                    </div>
                    <div class="sm:flex-auto ">
                        <div class="flex">
                            <div class="relative text-gray-600">
                                <input type="search" name="serch" placeholder="Search" wire:model.live="search"class="form control -white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        
                        <a type="button" wire:navigate href="{{ route('appointments.create') }}"
                            class="group relative overflow-hidden bg-purple-600 focus:ring-4 focus:ring-purble-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center">
                            <span class="z-40 flex justify-center">
                                <p>Add New </p>                            
                            </span>
                            <div
                                class="absolute inset-0 h-[200%] w-[200%] rotate-45 translate-x-[-70%] transition-all group-hover:scale-100 bg-white/30 group-hover:translate-x-[50%] z-20 duration-1000">
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="flow-root">
                    <div class="mt-8 overflow-x-auto">
                        <div class="inline-block min-w-full py-2 align-middle">
                            
                            <table class="w-full divide-y divide-gray-300">
                                <thead>
                                <tr>                                    
									<th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Title</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Description</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Date</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Time</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Created At</th>

                                    <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    
                                @foreach ($appointments as $appointment)
                                    <tr class="even:bg-gray-50" wire:key="{{ $appointment->id }}">
                                    
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $appointment->title }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $appointment->description }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $appointment->date }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $appointment->time }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $appointment->created_at }}</td>

                                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900">
                                            <a wire:navigate href="{{ route('appointments.show', $appointment->id) }}" >
                                                <button class="middle none center py-1 px-1 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-600 transition-all duration-300 text-white"data-ripple-light="true" >
                                                    <img src="{{ asset('img/visualizar.png') }}" alt="">
                                                </button>   
                                            </a>
                                            <a wire:navigate href="{{ route('appointments.edit', $appointment->id) }}" >
                                                <button class="middle none center py-1 px-1 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white"data-ripple-light="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>                                                
                                                </button>                                           
                                            </a>
                                            <button
                                                class="middle none center py-1 px-1 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white"
                                                data-ripple-light="true"
                                                type="button"
                                                wire:click="delete({{ $appointment->id }})"
                                                wire:confirm="Tem certeza de que deseja excluir?"
                                            >
                                                <img src="{{ asset('img/excluir.png') }}" alt="">                                            
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4 px-4">
                            {{ $appointments->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>