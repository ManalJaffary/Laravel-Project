<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child_vaccination extends Model
{
    use HasFactory;
    protected $table='child_vaccination';
    protected $fillable=array('vaccine_id','child_id','vaccinator_id','vaccine_date','vp_id','age','next_date');
}
