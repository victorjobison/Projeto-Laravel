<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;

class Dashboard extends Controller
{
    
    public function adminDashboard(Request $request)
    {
         // Recupera o número de usuários registrados
         $newUsersCount = User::whereDate('created_at', '=', now()->format('Y-m-d'))->count();
         $registeredUsersCount = User::count();
         
         // Recupera o número de compromissos registrados
         $newAppointmentCount = Appointment::whereDate('created_at', '=', now()->format('Y-m-d'))->count();
         $registeredAppointmentCount = Appointment::count();
 
         // Ordenação e Paginação para Users
         $usersOrder = $request->input('usersOrder', 'name'); // Campo padrão para ordenação
         $users = User::orderBy($usersOrder)->paginate(5, ['*'], 'usersPage');
 
         // Ordenação e Paginação para Appointments
         $appointmentsOrder = $request->input('appointmentsOrder', 'date'); // Campo padrão para ordenação
         $appointments = Appointment::orderBy($appointmentsOrder)->paginate(5, ['*'], 'appointmentsPage');
 
         return view('admin.dashboard', compact(
             'usersOrder',
             'appointmentsOrder',
             'users',
             'appointments',
             'registeredAppointmentCount',
             'registeredUsersCount',
             'newUsersCount',
             'newAppointmentCount'
         ));
    }

    public function editorDashboard(Request $request)
    {
         // Recupera o número de usuários registrados
         $newUsersCount = User::whereDate('created_at', '=', now()->format('Y-m-d'))->count();
         $registeredUsersCount = User::count();
         
         // Recupera o número de compromissos registrados
         $newAppointmentCount = Appointment::whereDate('created_at', '=', now()->format('Y-m-d'))->count();
         $registeredAppointmentCount = Appointment::count();
 
         // Ordenação e Paginação para Users
         $usersOrder = $request->input('usersOrder', 'name'); // Campo padrão para ordenação
         $users = User::orderBy($usersOrder)->paginate(5, ['*'], 'usersPage');
 
         // Ordenação e Paginação para Appointments
         $appointmentsOrder = $request->input('appointmentsOrder', 'date'); // Campo padrão para ordenação
         $appointments = Appointment::orderBy($appointmentsOrder)->paginate(5, ['*'], 'appointmentsPage');
 
         return view('editor.dashboard', compact(
             'usersOrder',
             'appointmentsOrder',
             'users',
             'appointments',
             'registeredAppointmentCount',
             'registeredUsersCount',
             'newUsersCount',
             'newAppointmentCount'
         ));
    }

}
