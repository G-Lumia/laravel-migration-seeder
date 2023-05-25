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
            $table->string('codice' , 5);
			$table->string('azienda', 50);
			$table->string('stazione_partenza', 50);
            $table->date('giorno_partenza');
			$table->time('orario_partenza');
			$table->string('stazione_arrivo', 50);
			$table->time('orario_arrivo');
			$table->tinyInteger('numero_carrozze');
			$table->boolean('in_orario')->default(false);
			$table->boolean('cancellato')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('trains');
	}
};
