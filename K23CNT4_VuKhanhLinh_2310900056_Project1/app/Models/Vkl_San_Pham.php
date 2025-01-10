<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vkl_San_Pham extends Model
{
    use HasFactory;



    protected $table='vkl_san_pham';
    protected $primaryKey = 'id';
    public $incrementing = false; 
    public $timestamps = true; 
}
