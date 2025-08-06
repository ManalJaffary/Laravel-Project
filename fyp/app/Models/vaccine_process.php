<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccine_process extends Model
{
    use HasFactory;
    protected $table='vaccine_process';
    protected $fillable=array('v_id','valid_age','dose');
}
