<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job',
        'location',
        'benefits',
        'salary',
        'company',
        'website',
        'description'
    ];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false)
        {
            $query->where('job', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
        
    }
}