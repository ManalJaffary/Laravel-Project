<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccine extends Model
{
    use HasFactory;
    protected $table='vaccine';
    protected $fillable=array('name','description','quantity','hcc_id');
}
