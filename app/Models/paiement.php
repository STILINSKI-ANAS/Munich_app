<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class paiement extends Pivot
{
    use HasFactory;
    public $incrementing = true;
    protected $table = 'paiements';
    protected $fillable = [
        'id',
        'oid',
        'status',
        'status_1',
        'status_2',
        'amount',
        'date',
        'etudiant_id',
        'test_id',
        'course_id',
        'paymentable_id', // Add this line
        'paymentable_type', // Add this line
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

    public function etudiantTest()
    {
        return $this->hasOne(EtudiantTest::class);
    }

    public function etudiantCourse()
    {
        return $this->hasOne(EtudiantCourse::class);
    }

    public function paymentable()
    {
        return $this->morphTo();
    }
}
