<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'level',
        'max_placements',
        'image',
        'start_date',
        'end_date',
        'exam_date',
        'is_hidden',
        'exam_center',
        'exam_fee',
    ];

    // Relationships
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function students()
    {
        return $this->belongsToMany(Etudiant::class, 'student_exams', 'exam_id', 'student_id')->withTimestamps();
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }


    // Define the relationship to the Registration model
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }



}
