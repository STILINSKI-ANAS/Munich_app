<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'level',
        'overview',
        'content',
        'time',
        'image',
        'price',
        'language_id',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
