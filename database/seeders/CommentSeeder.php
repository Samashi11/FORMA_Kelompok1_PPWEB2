<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
	public function run(): void
	{
		Comment::insert([
			[
				'forum_id' => 1,
				'user_id' => 3, // pengunjung
				'comment_text' => 'Saya setuju dengan ide-idenya!',
				'created_at' => now(),
			],
		]);
	}
}
