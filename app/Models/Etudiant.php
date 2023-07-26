<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'etudiants';

    protected $fillable=[
        'nom',
        'prenom',
        'cin',
        'tel',
        'email',
        'addresse',
        'dateNaissance',
        'status',
        'status_pro',
//        'Cours_options',
        'Cours',
//        'langue_options',
        'langue',
//        'referral_options',
        'referral',
        'background',
        'time_learning',
        'where_learning',
        'period_learning',
        'commentaire',
        'Image',
    ];

    public function paiements()
    {
        return $this->belongsToMany(paiement::class,'paiements','etudiant_id','product_id');
    }

    public function vipData()
    {
        return $this->hasOne(VIPCustomerData::class, 'customer_id', 'id');
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'etudiant_tests', 'etudiant_id', 'test_id')->withTimestamps();
    }

}
