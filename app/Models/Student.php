<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //point the database table
    protected $table = 'students';

    //the allowed table columns to be filled
    protected $fillable = ['name', 'email', 'phone', 'department', 'gender', 'courses', 'photo'];
    // protected $guarded = [];

    //protection
    protected $hidden = ['email', 'phone'];
}
