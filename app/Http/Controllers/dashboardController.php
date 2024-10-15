<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\Employee;

class dashboardController extends Controller
{
    public function index()
    {
        $users = Client::all();
        $employess = Employee::all();
        $cvCount = Employee::whereNotNull('cv')->count();
        $Employess = Employee::whereNotNull('id')->count();
        $cvCount = Employee::whereNotNull('cv')->count();
        $Clients = Client::whereNotNull('id')->count();
        $cvs = Employee::whereNotNull('cv')->pluck('cv');
        return view("dashboard", compact("users","employess" , "cvs" , "cvCount" , "Clients","Employess"));
    }

    public function deleteClient($id){
          Client::destroy($id);
          return redirect()->back();

    }
    public function deleteEmployee($id){
          Employee::destroy($id);
          return redirect()->back();

    }
}
