<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    //
    protected $guarded = [
							'id',
						];
	protected $primaryKey = 'id';
	protected $table = 'leaves';

	protected function leaveType()
    {
        return $this->belongsTo('App\Models\LeaveType','leave_type_id','id');
    }
    protected function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
