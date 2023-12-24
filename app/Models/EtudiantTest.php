<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EtudiantTest extends Pivot
{
    use HasFactory;
    public $incrementing = true;

    protected $fillable = [
        'etudiant_id',
        'test_id',
        'id',
        'paiement_id',
        'type',
    ];

    protected $table = 'etudiant_tests';


    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class,'etudiant_id');
    }
    public function test()
    {
        return $this->belongsTo(Test::class,'test_id');
    }
    public function paiement()
    {
        return $this->belongsTo(paiement::class);
    }

}
