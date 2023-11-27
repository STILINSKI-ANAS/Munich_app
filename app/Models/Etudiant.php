<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    protected $fillable = [
        'nom',
        'prenom',
        'cin',
        'tel',
        'email',
        'addresse',
        'dateNaissance',
        'status',
        'status_pro',
        'Cours',
        'langue',
        'referral',
        'background',
        'time_learning',
        'where_learning',
        'period_learning',
        'commentaire',
        'Image',
        'user_id',
    ];

    public function paiements()
    {
        return $this->belongsToMany(paiement::class, 'paiements', 'etudiant_id', 'product_id');
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'etudiant_tests', 'etudiant_id', 'test_id')->withTimestamps();
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'etudiant_courses', 'etudiant_id', 'course_id')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeStatusFilter($query, $status)
    {
        if ($status !== 'All') {
            return $query->where('status', $status);
        }

        return $query;
    }


    public function scopeSearch($query, $search, $language, $targetTable)
    {
        return $query->whereHas($targetTable, function ($query) use ($search, $language) {
            $query->where('level', 'LIKE', $search . '%');
            $query->whereHas('language', function ($query) use ($language) {
                $query->where('name', $language);
            });
        });
    }
}
