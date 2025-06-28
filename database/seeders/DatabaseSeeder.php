<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Forum;
use App\Models\Organization;
use App\Models\User;
use Dom\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{

	// 	User::factory()->create([
	// 		'name' => 'himati',
	// 		'email' => 'himati@kampus.com',
	// 		'password' => Hash::make('himati123'),
	// 	]);

	// 	User::factory()->create([
	// 		'name' => 'himasi',
	// 		'email' => 'himasi@kampus.com',
	// 		'password' => Hash::make('himasi123'),
	// 	]);

	// 	User::factory()->create([
	// 		'name' => 'himanis',
	// 		'email' => 'himanis@kampus.com',
	// 		'password' => Hash::make('himanis123'),
	// 	]);

	// 	User::factory()->create([
	// 		'name' => 'senada',
	// 		'email' => 'senada@kampus.com',
	// 		'password' => Hash::make('senada123'),
	// 	]);

	// 	User::factory()->create([
	// 		'name' => 'dpm',
	// 		'email' => 'dpm@kampus.com',
	// 		'password' => Hash::make('dpm123'),
	// 	]);

	// 	User::factory()->create([
	// 		'name' => 'bem',
	// 		'email' => 'bem@kampus.com',
	// 		'password' => Hash::make('bem123'),
	// 	]);

	// 	User::factory()->create([
	// 		'name' => 'fulan',
	// 		'email' => 'fulan@kampus.com',
	// 		'password' => Hash::make('fulan123'),
	// 	]);

		$this->call([
			OrganizationSeeder::class,
			EventSeeder::class,
			ForumSeeder::class,
			CommentSeeder::class,
		]);
	}
}