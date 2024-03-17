<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Address;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();

            $newTrain->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord']);
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d H:i:s');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d H:i:s');
            $newTrain->codice_treno = $faker->randomNumber(4, true);
            $newTrain->numero_carrozze = $faker->numberBetween(1, 9);
            $newTrain->in_orario = $faker->randomElement([true, false]);
            $newTrain->cancellato = $faker->randomElement([true, false]);

            $newTrain->save();
        }
    }
}
