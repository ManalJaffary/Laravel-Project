<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table='users';
    protected $fillable=array('firstname','lastname','email','password','profile_picture','gender','phone_number','cnic','address','postal_code','area','hcc_id','type','status','city');
}
