<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Cassandra\Custom;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $tasks = [
            'INSY',
            'SEW',
            'ITP-Projekt'
        ];
        return view('dashboard', ['tasks' => $tasks]);
    }

    public function project(){
        $tasks = [
            'INSY',
            'SEW',
            'ITP-Projekt'
        ];
        return view('project', ['tasks' => $tasks]);
    }

    public function customer(){
        $customers = Customer::all();

        return view('customer', ['customers' => $customers]);
    }
}
