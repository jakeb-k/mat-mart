<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mat extends Model
{
    function review(){
        return $this->hasMany('App\Models\Review');
    }
    use HasFactory;

    protected $fillable=['name','price','type','description','image','tags','rating', 'sku','available']; 
}
