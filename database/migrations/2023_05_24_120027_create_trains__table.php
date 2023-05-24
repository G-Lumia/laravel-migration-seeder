<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::create('trains', function (Blueprint $table) {
			$table->id();
			$table->string('azienda', 50);
			$table->string('stazione di partenza', 50);
			$table->time('orario di partenza');
			$table->string('stazione di arrivo', 50);
			$table->string('orario di arrivo');
			$table->integer('numero di carrozze');
			$table->boolean('in orario')->nullable()->default(false);
			$table->boolean('cancellato')->nullable()->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('trains');
	}
};
