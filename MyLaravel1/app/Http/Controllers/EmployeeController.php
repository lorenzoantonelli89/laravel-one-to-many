<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class EmployeeController extends Controller
{
    public function detailsEmployee($id){

        $employee = Employee::findOrFail($id);
        // dd($employee);
        return view('pages.employee', compact('employee'));
    }
}
