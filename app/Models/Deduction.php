<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Deduction extends Model
{
    protected $fillable = [
        'payroll_id',
        'contribution_rate_id',
        'amount',
    ];

    public function payroll(): BelongsTo
    {
        return $this->belongsTo(Payroll:: class, 'payroll_id', 'id');
    }

    public function contributionRate(): BelongsTo
    {
        return $this->belongsTo(ContributionRate:: class, 'contribution_rate_id', 'id');
    }

}
