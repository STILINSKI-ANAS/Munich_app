<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EtudiantCourse extends Pivot
{
    use HasFactory;

    protected $table = 'etudiant_courses';


    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class,'etudiant_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
}
