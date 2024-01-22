<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeePosition;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Support\Facades\DB;

class EmployeePositionController extends Controller
{
    public function index()
    {
        $data = \App\Models\EmployeePosition::all();

        return view("employeePosition", compact("data"));
    }

    public function store(Request $request)
    {
        $employees = Employee::with('positions')->get();
        $positions = Position::all();

        return view("addEmployeePosition", compact('employees', 'positions'));
    }

    public function performanceInsert(Request $request)
    {
        EmployeePosition::create($request->all());
        
        return redirect()->route("performance")->with('success', 'Nota de desempenho adicionada com sucesso!');
    }

    public function ranking()
    {
        $data = EmployeePosition::with(['employee', 'employee.unit', 'position'])
        ->orderByDesc('performance_note')
        ->get();

        return view("ranking", compact("data"));
    }

    public function performanceEdit($id)
    {
        $data = EmployeePosition::findOrFail($id);
        $employees = Employee::all();
        $positions = Position::all();

        return view('editEmployeePosition', compact('data', 'employees', 'positions'));
    }

    public function performanceUpdate(Request $request, $id)
    {
        $data = EmployeePosition::find($id);
        $data->update($request->all());

        return redirect()->route('performance')->with('success', ' Nota de desempenho atualizada com sucesso!');
    }
}
