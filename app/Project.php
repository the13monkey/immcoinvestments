<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'project_id';
    public $timestamps = false; 
    
    protected $fillable = ['project_name', 'project_location', 'project_status', 'project_category', 'project_description', 'project_picture', 'featured'];
}
