<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{

    protected $fillable = [
        'title'
        ];

        use HasFactory;

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'position_id', 'id');
    }

}