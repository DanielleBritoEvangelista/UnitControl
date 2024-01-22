<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function index()
    {
        $data = \App\Models\Position::all();

        return view("position", compact("data"));
    }

    public function store(Request $request)
    {
        return view("addposition");
    }

    public function positionInsert(Request $request)
    {
        Position::create($request->all());
        
        return redirect()->route("position")->with('success', 'Cargo adicionado com sucesso!');
    }
}
