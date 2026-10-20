<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContributionType extends Model
{

    protected $fillable = [
        'name'
        ];

        use HasFactory;

    public function contributionRates(): HasMany
    {
        return $this->hasMany(ContributionRate::class, 'contribution_type_id', 'id');
    }

}