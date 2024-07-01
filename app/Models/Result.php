<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'convocation_id', 'ecrit', 'note_ecrit', 'orale', 'note_orale', 'resultats'
    ];

    public function convocation()
    {
        return $this->belongsTo(Convocation::class);
    }
}
