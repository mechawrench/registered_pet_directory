<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petNames = [
            'Maddy',
            'Chi-Square',
            'Jack',
            'Spot',
            'Ham',
            'Snoopy',
            'Scoobs',
            'Scooter',
            'Daisy',
            'Fido',
        ];

        foreach ($petNames as $petName) {
            \App\Models\Pet::factory()->create([
                'name' => $petName,
                'breed_id' => \App\Models\Breed::inRandomOrder()->first()->id,
            ]);
        }
    }
}
