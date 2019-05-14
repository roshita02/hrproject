<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveStatus extends Model
{
    //
     protected $guarded = [
							'id',
						];
	protected $primaryKey = 'id';
	protected $table = 'leave_status_details';
}
