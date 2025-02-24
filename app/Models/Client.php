<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";
    protected $fillable = ['id','name', 'email', 'phone', 'company', 'message','created_at','updated_at'];  
}
