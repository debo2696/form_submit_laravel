<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerForm extends Model
{
    use HasFactory;
    protected $table = 'career_forms';
    protected $fillable = ['name','email','description','birth_year','file_name','file_path'];
}
