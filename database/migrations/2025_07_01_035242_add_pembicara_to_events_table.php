<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('event', function (Blueprint $table) {
            $table->string('pembicara')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('event', function (Blueprint $table) {
            $table->dropColumn('pembicara');
        });
    }
};
