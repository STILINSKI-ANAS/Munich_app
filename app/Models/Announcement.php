<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table ='announcements';

    protected $fillable = [
        'language_id',
        'titre',
        'description',
        'Image'

    ];

    public function language(){
        return $this->belongsTo(Language::class,'language_id','id');
    }

}
