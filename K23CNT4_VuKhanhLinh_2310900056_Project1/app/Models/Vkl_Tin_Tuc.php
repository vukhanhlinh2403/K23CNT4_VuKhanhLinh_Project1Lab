<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vkl_Tin_Tuc extends Model
{
    use HasFactory;



    protected $table='vkl_tin_tuc';
    protected $primaryKey = 'id';
    public $incrementing = false; 
    public $timestamps = true; 
}
