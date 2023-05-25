<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use DateInterval;
use DateTime;

use App\Models\Train;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run(Faker $faker)
     {
         for ($i = 0; $i < 20; $i++) {
             $newTrain = new Train();

             $newTrain->codice = $faker->lexify();
             $newTrain->azienda = $faker->company();
             $newTrain->stazione_partenza = $faker->city();

             $newTrain->giorno_partenza = $faker->dateTimeBetween('0 week', '1 week');
             $newTrain->orario_partenza = $faker->time();

             $orarioArrivo = DateTime::createFromFormat('H:i:s', $newTrain->orario_partenza);
             $orarioArrivo->add(new DateInterval('PT'.rand(1,6).'H'));
             $newTrain->stazione_arrivo = $faker->city();
             $newTrain->orario_arrivo = $orarioArrivo;

             $newTrain->numero_carrozze = $faker->numberBetween(3, 15);
             $newTrain->in_orario = $faker->boolean();
             $newTrain->cancellato = $faker->boolean();
             $newTrain->save();
         }
     }

}
