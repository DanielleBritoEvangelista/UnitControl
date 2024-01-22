<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;


class UnitController extends Controller
{
    public function index()
    {
        $data = \App\Models\Unit::all();

        return view("unit", compact("data"));
    }

    public function store(Request $request)
    {
        return view("addUnit");
    }

    public function unitInsert(Request $request)
    {
        Unit::create($request->all());
        
        return redirect()->route("unit")->with('success', 'Unidade adicionada com sucesso!');
    }

    public function unitReport()
    {
        $data = \App\Models\Unit::join('employees', 'units.id', '=', 'employees.unit_id')
        ->groupBy('units.id', 'units.unit_name', 'units.corporate_reason', 'units.cnpj')
        ->selectRaw('units.id, units.unit_name, units.corporate_reason, units.cnpj')
        ->selectRaw('count(employees.id) as total') 
        ->get();
    
        return view('unitReport', compact('data'));
    }
}
