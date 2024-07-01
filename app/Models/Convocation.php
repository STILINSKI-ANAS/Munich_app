<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocation extends Model
{
    use HasFactory;

    protected $fillable = ['registration_id', 'exam_id', 'payment_id'];

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }
}
