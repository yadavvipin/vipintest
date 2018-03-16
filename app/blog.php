<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['id','title','slug','user_id','description',];
}
