<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;    


class EmployeesController extends Controller
{
    public function show() {
        $employeeData = Employee::all();
        return view('employees', ['employeeData' => $employeeData]);
    }
}
