<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayrollPeriod extends Model
{

    protected $fillable = [
        'start_date',
        'end_date',
        'pay_date',
        'status'
        ];

        use HasFactory;

    public function payrolls(): HasMany
    {
        return $this->hasMany(Payroll::class, 'payroll_period_id', 'id');
    }

}