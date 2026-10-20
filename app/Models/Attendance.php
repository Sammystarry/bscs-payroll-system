<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Attendance extends Model
{

    protected $fillable = [
        'employee_id',
        'work_date',
        'time_in',
        'time_out',
        'hours_worked',
        'overtime_hours'
        ];

        use HasFactory;

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

}