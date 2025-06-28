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
		'ketua',
		'visi',
		'misi',
		'jumlah_anggota',
		'email',
		'website',
		'established_at',
	];

	public function forum()
	{
		return $this->hasMany(Forum::class, 'organization_id');
	}

	
}
