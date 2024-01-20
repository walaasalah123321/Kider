<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=["title","Capacity","Salary","StartAge","EndAge","StartTime","EndTime","image","Teacher_id","publish"];
 public function teachers(){
    return $this->belongsTo(Teacher::class,"Teacher_id","id");
 }
}
