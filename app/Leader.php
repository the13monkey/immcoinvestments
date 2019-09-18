<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $primaryKey = 'leader_id';
    public $timestamps = false; 

    protected $fillable = ['leader_name', 'leader_title', 'leader_description', 'leader_picture'];
}
