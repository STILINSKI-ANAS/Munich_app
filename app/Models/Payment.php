<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'registration_id', 'payment_reference', 'payment_date', 'payment_receipt', 'verified'
    ];

    // Define the relationship to the Registration model
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
