<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable = ['employee_name', 'employee_email', 'employee_cpf', 'position_id', 'unit_id'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class, 'employee_positions', 'employee_id', 'position_id');
    }
}
