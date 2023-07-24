<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'overview',
        'content',
        'time',
        'name',
        'price',
        'image',
        'short_description',
    ];


    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'etudiant_tests', 'test_id', 'etudiant_id')->withTimestamps();
    }
}
