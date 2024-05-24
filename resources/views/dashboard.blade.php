<x-app-layout>
    <head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Contenido principal -->
                <div class="flex-1 flex flex-wrap">

                    <!-- Área de contenido principal -->
                    <div class="flex-1 p-4 w-full md:w-1/2">
                        <!-- Contenedor de Gráficas -->
                        <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                            <!-- Primer contenedor -->
                            <!-- Sección 1 - Gráfica de Usuarios -->
                            <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                                <h2 class="text-gray-500 text-lg font-semibold pb-1">Users</h2>
                                <div class="my-1"></div> <!-- Espacio de separación -->
                                <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                                <div class="chart-container" style="position: relative; height:150px; width:100%">
                                    <!-- El canvas para la gráfica -->
                                    <canvas id="usersChart"></canvas>
                                </div>
                            </div>

                            <!-- Segundo contenedor -->
                            <!-- Sección 2 - Gráfica de Comercios -->
                            <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                                <h2 class="text-gray-500 text-lg font-semibold pb-1">Appointments</h2>
                                <div class="my-1"></div> <!-- Espacio de separación -->
                                <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                                <div class="chart-container" style="position: relative; height:150px; width:100%">
                                    <!-- El canvas para la gráfica -->
                                    <canvas id="appointmentChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Tercer contenedor debajo de los dos anteriores -->
                        <!-- Sección 3 - Tabla de Autorizaciones Pendientes -->
                        <div class="mt-8 bg-white p-4 shadow rounded-lg">
                            <h2 class="text-gray-500 text-lg font-semibold pb-4">Users</h2>
                            <div class="my-1"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                            <table class="w-full table-auto text-sm">
                                <thead>
                                    <tr class="text-sm leading-normal">
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Profile Photo</th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Name</th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Email</th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">current_team_id</th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">CREATED AT</th>
                                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">UPDATED AT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr class="hover:bg-grey-lighter">
                                            <td class="py-2 px-4 border-b border-grey-light flex justify-center ">
                                                <img src="{{ $user->profile_photo_url }}" alt="User's Profile Photo" class="h-12 w-12 rounded-full object-cover">
                                            </td>
                                            <td class="py-2 px-4 border-b border-grey-light text-center">{{ $user->name }}</td>
                                            <td class="py-2 px-4 border-b border-grey-light text-center">{{ $user->email }}</td>
                                            <td class="py-2 px-4 border-b border-grey-light text-center">{{ $user->current_team_id }}</td>
                                            <td class="py-2 px-4 border-b border-grey-light text-center">{{ $user->created_at }}</td>
                                            <td class="py-2 px-4 border-b border-grey-light text-center">{{ $user->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->
                            <div class="mt-4 px-4">
                                {{ $users->links() }}
                            </div>
                        </div>

                        <!-- Cuarto contenedor -->
                        <!-- Sección 4 - Tabla de Transacciones -->
                        <div class="mt-8 bg-white p-4 shadow rounded-lg">
                            <div class="bg-white p-4 rounded-md mt-4">
                                <h2 class="text-gray-500 text-lg font-semibold pb-4">Appointments</h2>
                                <div class="my-1"></div> <!-- Espacio de separación -->
                                <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                                <table class="w-full table-auto text-sm">
                                    <thead>
                                        <tr class="text-sm leading-normal">
                                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">Title</th>
                                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Description</th>
                                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">Date</th>
                                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">Time</th>
                                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">CREATED AT</th>
                                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light ">UPDATED AT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $appointment)
                                            <tr class="hover:bg-grey-lighter">
                                                <td class="py-2 px-4 border-b border-grey-light text-center">{{ $appointment->title }}</td>
                                                <td class="py-2 px-4 border-b border-grey-light text-center">{{ $appointment->description }}</td>
                                                <td class="py-2 px-4 border-b border-grey-light text-center">{{ $appointment->date }}</td>
                                                <td class="py-2 px-4 border-b border-grey-light text-center">{{ $appointment->time }}</td>
                                                <td class="py-2 px-4 border-b border-grey-light text-center">{{ $appointment->created_at }}</td>
                                                <td class="py-2 px-4 border-b border-grey-light text-center">{{ $appointment->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <!-- Botón "Ver más" para la tabla de Transacciones -->
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
    
    <script>
        var newUsersCount = {{ $newUsersCount }};
        var registeredUsersCount = {{ $registeredUsersCount }};
        var newAppointmentCount = {{ $newAppointmentCount }};
        var registeredAppointmentCount = {{ $registeredAppointmentCount }};
        // Gráfica de Usuarios
        var usersChart = new Chart(document.getElementById('usersChart'), {
            type: 'doughnut',
            data: {
                labels: ['Novos', 'Registrados'],
                datasets: [{
                    data: [newUsersCount, registeredUsersCount - newUsersCount],
                    backgroundColor: ['#00F0FF', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                }
            }
        });

        var commercesChart = new Chart(document.getElementById('appointmentChart'), {
            type: 'doughnut',
            data: {
                labels: ['Novos', 'Registrados'],
                datasets: [{
                    data: [newAppointmentCount, registeredAppointmentCount - newAppointmentCount],
                    backgroundColor: ['#FEC500', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom' 
                }
            }
        });
    </script>
</x-app-layout>
