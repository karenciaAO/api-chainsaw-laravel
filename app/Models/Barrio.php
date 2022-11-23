<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barrio extends Model
{
    use SoftDeletes;
    
    protected $table = 'barrios';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = ['nombre.provincia_id'];
    
    

}
