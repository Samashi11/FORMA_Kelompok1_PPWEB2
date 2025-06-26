<?php

namespace Database\Seeders;
use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
	public function run(): void
	{
		Event::insert([
			[
				'organization_id' => 1,
				'title' => 'Seminar Teknologi Terbaru',
				'description' => 'Mari kita bahas teknologi terbaru yang akan mengubah dunia.',
				'event_date' => '2023-11-15 10:00:00',
				'location' => 'Auditorium Universitas',
				'poster' => 'seminar_teknologi.jpg',
				'created_by' => 2, // ID dari user anggota
				'created_at' => now(),
			],
		]);
	}
}
