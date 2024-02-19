<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// richiamo faker per utilizzarlo
use Faker\Generator as faker; 
use App\Models\Train;

class trainstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Creazione di 20 dati falsi per la tabella dei treni
        for ($i = 0; $i < 20; $i++) {
          
            $train = new Train();
            $train->azienda = $faker->company;
            $train->stazione_partenza = $faker->city;
            $train->stazione_arrivo = $faker->city;
            $train->orario_partenza = $faker->time($format = 'H:i:s');
            $train->orario_arrivo = $faker->time($format = 'H:i:s');
            $train->codice_treno = $faker->numerify('T###');
            $train->numero_carrozze = $faker->numberBetween($min = 4, $max = 12);
            $train->in_orario = $faker->boolean;
            $train->cancellato = $faker->boolean;
            $train->data_arrivo = $faker->date($format = 'Y-m-d');

            if($i < 2){
                $train->data_partenza = '2024-02-19';
            }
            else{
                $train->data_partenza = $faker->date($format = 'Y-m-d');
            }
            $train->save(); // Salvataggio dei dati nel database
            

         }
    }
}