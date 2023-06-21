<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table='languages';

    protected $fillable=[
        'name',
        'description',
        'Image'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }


    public function announcements(){
        return $this->hasMany(Announcement::class,'language_id','id');
    }
}
