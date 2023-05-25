<?php

namespace Database\Seeders;

use App\Models\train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $train = new train;
            $train->Azienda = $faker->randomElement(['Freccia Rossa', 'Regionale', 'Italo', 'Intercity', 'Freccia3000']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->arrival_hour = $faker->time();
            $train->departure_hour = $faker->time();
            $train->code_train = $faker->bothify('###');
            $train->number_cab = $faker->bothify('##');
            $train->train_delay = $faker->boolean();
            $train->delated = $faker->boolean();
            $train->save();
        }
    }
}
