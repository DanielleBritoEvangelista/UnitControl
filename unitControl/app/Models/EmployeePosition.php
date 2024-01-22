<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePosition extends Model
{
    use HasFactory;
    
    protected $fillable = ['employee_id', 'position_id', 'performance_note'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
