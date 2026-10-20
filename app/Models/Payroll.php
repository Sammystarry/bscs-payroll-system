<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payroll extends Model
{

    protected $fillable = [
        'employee_id',
        'payroll_period_id',
        'user_id',
        'gross_pay',
        'total_deductions',
        'net_pay',
        'date_processed'
        ];

        use HasFactory;

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function payrollPeriod(): BelongsTo
    {
        return $this->belongsTo(PayrollPeriod::class, 'payroll_period_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function deductions(): HasMany
    {
        return $this->hasMany(Deduction::class, 'payroll_id', 'id');
    }

    public function payslip(): HasOne
    {
        return $this->hasOne(Payslip::class, 'payroll_id', 'id');
    }

}