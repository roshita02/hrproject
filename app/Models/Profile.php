<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    	protected $guarded = [
							'id',
						];
	protected $primaryKey = 'id';
	protected $table = 'user_profile';

	protected function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
