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
                <div class="flex-1 flex flex-wrap">

                    <div class="flex-1 p-4 w-full md:w-1/2">
                        <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                            <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                                <h2 class="text-gray-500 text-lg font-semibold pb-1">Users</h2>
                                <div class="my-1"></div> 
                                <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> 
                                <div class="chart-container" style="position: relative; height:150px; width:100%">
                                    <canvas id="usersChart"></canvas>
                                    
                                </div>
                            </div>

                          
                            <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                                <h2 class="text-gray-500 text-lg font-semibold pb-1">Appointments</h2>
                                <div class="my-1"></div>
                                <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> 
                                <div class="chart-container" style="position: relative; height:150px; width:100%">
                                    <canvas id="appointmentChart"></canvas>
                                </div>
                            </div>
                        </div>

                     
                        <div class="mt-8 bg-white p-4 shadow rounded-lg">
                            <h2 class="text-gray-500 text-lg font-semibold pb-4">Users Information</h2>
                            <div class="my-1"></div> 
                            <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> 
                            <table class="w-full table-auto text-sm">
                                <thead>
                                    <tr class="text-sm leading-normal">
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?usersOrder=profile_photo_url">Profile Photo</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?usersOrder=name">Name</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?usersOrder=email">Email</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?usersOrder=current_team_id">Current Team ID</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?usersOrder=created_at">Created At</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?usersOrder=updated_at">Updated At</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr class="hover:bg-grey-lighter">
                                            <td class="py-2 px-4 border-b border-grey-light flex justify-center">
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
                            <div class="mt-4 px-4">
                                {{ $users->appends(['appointmentsPage' => request('appointmentsPage'), 'usersOrder' => $usersOrder])->links() }}
                            </div>
                        </div>

                        <div class="mt-8 bg-white p-4 shadow rounded-lg">
                            <h2 class="text-gray-500 text-lg font-semibold pb-4">Appointments Information</h2>
                            <div class="my-1"></div>
                            <div class="bg-gradient-to-r from-orange-300 to-orange-500 h-px mb-6"></div> 
                            <table class="w-full table-auto text-sm">
                                <thead>
                                    <tr class="text-sm leading-normal">
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?appointmentsOrder=title">Title</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?appointmentsOrder=description">Description</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?appointmentsOrder=date">Date</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?appointmentsOrder=time">Time</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?appointmentsOrder=created_at">Created At</a>
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            <a href="?appointmentsOrder=updated_at">Updated At</a>
                                        </th>
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
                            <div class="mt-4 px-4">
                                {{ $appointments->appends(['usersPage' => request('usersPage'), 'appointmentsOrder' => $appointmentsOrder])->links() }}
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
