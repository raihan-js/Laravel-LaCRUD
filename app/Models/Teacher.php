<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    //point the database table
    protected $table = 'teachers';

    //the allowed table columns to be filled
    protected $fillable = ['name', 'email', 'phone', 'photo'];
    // protected $guarded = [];

    //protection
    protected $hidden = ['email', 'phone'];
}
