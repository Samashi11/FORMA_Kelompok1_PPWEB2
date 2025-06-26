<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Organization;

class OrganizationSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Organization::insert([
			[
				'name' => 'Himpunan Mahasiswa Teknik Informatika',
				'type' => 'HIMATI',
				'description' => 'Organisasi mahasiswa yang fokus pada bidang teknik informatika.',
				'created_at' => now(),
			],
			[
				'name' => 'Himpunan Mahasiswa Sistem Informasi',
				'type' => 'HIMASI',
				'description' => 'Organisasi mahasiswa yang fokus pada sistem informasi.',
				'created_at' => now(),
			],
			[
				'name' => 'Himpunan Mahasiswa Teknik Komputer',
				'type' => 'HIMANIS',
				'description' => 'Organisasi mahasiswa yang fokus pada teknik komputer.',
				'created_at' => now(),
			],
		]);
	}
}
