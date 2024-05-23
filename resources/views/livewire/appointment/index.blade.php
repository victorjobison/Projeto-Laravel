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
                            <x-input type="text" placeholder="Search" wire:model.live="search" class="form control"></x-input>
                            <div class="flex items-center justify-center border-gray-300 bg-white p-5 focus:outline-none">
                                <svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
                                    <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                                </svg>
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
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Title</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Description</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Date</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Time</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Created At</th>

                                    <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    
                                @foreach ($appointments as $appointment)
                                    <tr class="even:bg-gray-50" wire:key="{{ $appointment->id }}">
                                    
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $appointment->title }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $appointment->description }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $appointment->date }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $appointment->time }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $appointment->created_at }}</td>

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