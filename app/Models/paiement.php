<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class paiement extends Pivot
{
    use HasFactory;

    protected $table = 'paiements';
    protected $fillable = [
        'status',
        'amount',
        'date',
        'etudiant_id',
        'test_id',
        'course_id',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
