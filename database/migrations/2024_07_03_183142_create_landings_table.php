<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('landings', function (Blueprint $table) {
			$table->id();
			$table->string('plataforma');
			$table->string('url_dashboard');
			$table->string('url_instalador');
			$table->string('icono');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('landings');
	}
};
