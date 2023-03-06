<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job',
        'user_id',
        'location',
        'job_type',
        'benefits',
        'salary',
        'emp_type',
        'company',
        'website',
        'description'
    ];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['position'] ?? false)
        {
            $query->where('job', 'like', '%' . request('position') . '%')
                    ->where('location', 'like', '%' . request('location') . '%');
        }

        if ($filters['location'] ?? false)
        {
            $query->where('location', 'like', '%' . request('location') . '%');
        }
        
    }

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id');

    }

}
