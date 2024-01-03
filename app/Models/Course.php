<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'overview',
        'content',
        'time',
        'image',
        'price',
        'max_placements',
        'language_id',
        'is_hidden'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'etudiant_courses', 'course_id', 'etudiant_id')->withTimestamps();
    }
}
