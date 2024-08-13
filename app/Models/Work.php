<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id', 'title', 'description', 'requirements', 'salary', 'location', 'tag',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
