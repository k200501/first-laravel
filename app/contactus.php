<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    //
    protected $fillable = ['name','email','phone','content','created_at','updated_at'];
}
