<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', [
            'items'=> $employees
        ]);
    }

    public function store(Request $request)
    {
        Employee::create([
            'firstname'=> $request->firstname123,
            'lastname'=> $request->lastname123,
            'job'=> $request->job123,
            'salary' => $request->salary123
        ]);

        return redirect('/employees');

    }
}
