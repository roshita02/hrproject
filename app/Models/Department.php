<?php
namespace App\Models;
use Eloquent;

class Department extends Eloquent {

	protected $fillable = [
							'name',
							'description'
						];
	protected $primaryKey = 'id';
	protected $table = 'departments';

	protected  function designation(){
        return $this->hasMany('App\Models\Designation','department_id','id');
    }

}
