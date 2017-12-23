<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyForm extends Model
{
    protected $fillable = ['first_name','last_name','email','phone','position','hear','linkedin_url','about','status','gender','question_id','answer'];
}
