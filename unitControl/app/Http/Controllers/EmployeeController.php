<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Unit;
use App\Models\Position;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = \App\Models\Employee::all();

        return view("employee", compact("data"));
    }

    public function store(Request $request)
    {
        $units = Unit::all();
        $positions = Position::all();

        return view("addEmployee", compact('units', 'positions'));
    }

    public function employeeInsert(Request $request)
    {
        Employee::create($request->all());

        return redirect()->route("employee")->with('success', 'Colaborador(a) adicionado(a) com sucesso!');
    }

    public function employeeReport()
    {
        $data = \App\Models\Employee::all();

        return view("employeeReport", compact("data"));
    }
}
