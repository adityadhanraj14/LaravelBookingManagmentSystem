<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webpage extends Model
{
    use HasFactory;
    protected $table="webpage";
    protected $fillable=['id','name','slug','html','status','created_by','updated_by','created_at','updated_at'];
}
