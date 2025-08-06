<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    use HasFactory;
    protected $table='child';
    protected $fillable=array('firstname','lastname','dob','gender','card_id','p_id','h_id','status');
}
