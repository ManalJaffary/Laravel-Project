<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healthcare_center extends Model
{
    use HasFactory;
    protected $table='healthcare_center';
    protected $fillable=array('name','email','password','profile_picture','reg_number','phone_number','address','postal_code','area','admin_id','type','status','city');
}
