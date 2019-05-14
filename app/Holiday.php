<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
	protected $fillable = [
							'date',
							'slug',
							'description'
						];
	protected $primaryKey = 'id';
	protected $table = 'holidays';
}
