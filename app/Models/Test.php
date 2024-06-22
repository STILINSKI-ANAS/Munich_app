<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'time',
        'price',
        'max_placements',
        'Image',
        'course_id',
        'start_date',
        'end_date',
        'is_hidden'
    ];



    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'etudiant_tests', 'test_id', 'etudiant_id')->withTimestamps();
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
