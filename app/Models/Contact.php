<?php

namespace App\Models;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    // Add fillable property
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'job_title',
    ];
    //Add relationships
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
