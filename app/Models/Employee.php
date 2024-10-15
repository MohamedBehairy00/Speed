<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employess";
    protected $fillable = ['id','Name', 'Email', 'Phone', 'Address', 'Comments','cv','created_at','updated_at'];


}
