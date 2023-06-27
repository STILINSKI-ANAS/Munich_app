<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class paiement extends Pivot
{
    use HasFactory;

    protected $table = 'paiements';
    protected $fillable=[
        'methode',
        'status',
        'amount',
        'reference',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class,'etudiant_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

}
