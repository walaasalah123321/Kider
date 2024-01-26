<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=["name","position","facebook","twitter","instagram","image","publish"];
    function classes(){
        return $this->hasMany(Subject::class,"Teacher_id","id");
    }

}
