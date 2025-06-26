<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('event', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('organization_id');
			$table->unsignedBigInteger('created_by');
			$table->string('title');
			$table->text('description');
			$table->string('location');
			$table->dateTime('event_date');
			$table->string('poster')->nullable();
			$table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
			$table->timestamps();

			// Foreign keys
			$table->foreign('organization_id')->references('id')->on('organization')->onDelete('cascade');
			$table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
		});

	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('event');
	}
};
