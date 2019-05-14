<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attandance extends Model
{
    //

    protected $table = 'clocks';

    protected $guarded = ['id'];

    public function userlist(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
