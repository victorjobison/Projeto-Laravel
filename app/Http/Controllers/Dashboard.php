<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;

class Dashboard extends Controller
{
    public function index()
    {
        // Recupera o número de usuários registrados
        $newUsersCount = User::whereDate('created_at', '=', now()->format('Y-m-d'))->count();
        $registeredUsersCount = User::count();

        // Recupera o número de comércios registrados
        $newAppointmentCount = Appointment::whereDate('created_at', '=', now()->format('Y-m-d'))->count();
        $registeredAppointmentCount = Appointment::count();

        $users = User::orderBy('name')->paginate(5);
        $appointments = Appointment::orderBy('title')->paginate(5);

        return view('dashboard', compact(
            'users', 
            'appointments',
            'registeredAppointmentCount',
            'registeredUsersCount',
            'newUsersCount',
            'newAppointmentCount'
        ));
    }
}
