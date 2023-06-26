<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EtudiantTest extends Pivot
{
    use HasFactory;

    protected $table = 'etudiant_tests';


    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class,'etudiant_id');
    }
    public function test()
    {
        return $this->belongsTo(Test::class,'test_id');
    }
}
