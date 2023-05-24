<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
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
         for ($i = 0; $i < 10; $i++) {
             $newTrain = new Train();
             $newTrain->codice = $faker->lexify();
             $newTrain->azienda = $faker->company();
             $newTrain->stazione_partenza = $faker->city();
             $newTrain->orario_partenza = $faker->time();
             $newTrain->stazione_arrivo = $faker->city();
             $newTrain->orario_arrivo = $faker->time();
             $newTrain->numero_carrozze = $faker->numberBetween(5, 25);
             $newTrain->in_orario = $faker->boolean();
             $newTrain->cancellato = $faker->boolean();
             $newTrain->save();
         }
     }

}
