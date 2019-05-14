<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    //
     protected $guarded = [
							'id',
						];
	protected $primaryKey = 'id';
	protected $table = 'leave_types';
}
