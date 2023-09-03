<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $table="bookings";
    protected $fillable=['id','name','booking_datetime','status','user_id','created_at','updated_at'];
}
