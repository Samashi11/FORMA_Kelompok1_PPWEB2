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
		Schema::create('comment', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('forum_id');
			$table->unsignedBigInteger('user_id');
			$table->text('comment_text');
			$table->timestamps();

			// Foreign keys
			$table->foreign('forum_id')->references('id')->on('forum')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});

	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('comment');
	}
};
