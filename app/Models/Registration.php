<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    use HasFactory;

    protected $fillable = [
        'cin', 'first_name', 'last_name', 'gender', 'birth_date', 'phone', 'email', 'birth_place', 'birth_country', 'modules', 'exam_id', 'photo_path', 'cin_path', 'email_validation_token', 'email_verified'
    ];

    // Define the relationship to the Exam model
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    // Define the relationship to the Payment model
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
