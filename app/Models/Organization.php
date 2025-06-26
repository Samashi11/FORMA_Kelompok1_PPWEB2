<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
	protected $table = 'organization';

	protected $fillable = [
		'name',
		'description',
		'logo',
		'type',
	];

	public function forum()
	{
		return $this->hasMany(Forum::class, 'organization_id');
	}

	
}
