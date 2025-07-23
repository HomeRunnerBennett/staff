<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'position',
        'department',
        'salary',
        'status',
        'hire_date',
        'address'
    ];

    protected $casts = [
        'hire_date' => 'date',
        'salary' => 'decimal:2'
    ];

    // Scope for active staff
    public function scopeActive($query)
    {
        return $query->where('status', 'Active');
    }

    // Scope for inactive staff
    public function scopeInactive($query)
    {
        return $query->where('status', 'Inactive');
    }
}