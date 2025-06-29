<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
	
	protected $table = 'forum';

	protected $fillable = [
		'organization_id',
		'title',
		'content',
		'created_by',
	];

	public function organization()
	{
		return $this->belongsTo(Organization::class, 'organization_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'forum_id', 'id');
	}
}
