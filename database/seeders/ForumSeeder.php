<?php

namespace Database\Seeders;

use App\Models\Forum;
use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
	public function run(): void
	{
		Forum::insert([
			[
				'organization_id' => 1,
				'title' => 'Diskusi Program Kerja HIMA',
				'content' => 'Ayo diskusikan program kerja kita semester ini!',
				'created_by' => 2, // ID dari user anggota
				'created_at' => now(),
			],
		]);
	}
}
