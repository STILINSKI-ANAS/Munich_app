<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructors';

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'nationality',
        'adresse',
        'email',
        'phone',
        'specialisation',
        'description',
        'cv_file',
        'image',
        'national_id',
    ];
}
