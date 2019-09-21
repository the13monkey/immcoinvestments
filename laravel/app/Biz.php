<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biz extends Model
{
    public $timestamps = false; 
    protected $fillable = ['biz_name', 'biz_description'];
}
