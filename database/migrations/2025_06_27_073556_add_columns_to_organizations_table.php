<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up(): void
	{
		Schema::table('organization', function (Blueprint $table) {
			$table->string('ketua')->nullable();
			$table->text('visi')->nullable();
			$table->text('misi')->nullable();
			$table->integer('jumlah_anggota')->nullable();
			$table->string('email')->nullable();
			$table->string('website')->nullable();
			$table->date('established_at')->nullable();
		});
	}

	public function down(): void
	{
		Schema::table('organization', function (Blueprint $table) {
			$table->dropColumn(['ketua', 'visi', 'misi', 'jumlah_anggota', 'email', 'website', 'established_at']);
		});
	}
};
