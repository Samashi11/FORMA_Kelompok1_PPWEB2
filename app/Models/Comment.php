<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
	protected $table = 'comment';

	protected $fillable = [
		'forum_id',
		'user_id',
		'comment_text',
	];

	public function forum()
	{
		return $this->belongsTo(Forum::class, 'forum_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
