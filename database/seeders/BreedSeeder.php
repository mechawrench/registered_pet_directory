<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breeds = collect([
            [
                'name' => 'Golden Retriever',
                'description' => 'The Golden Retriever is a large-sized breed of dog bred as gun dogs to retrieve shot waterfowl such as ducks and upland game birds during hunting and shooting parties, and were named "retriever" because of their ability to retrieve shot game undamaged due to their soft mouth. Golden Retrievers have an instinctive love of water, and are easy to train to basic or advanced obedience standards. They are a long-coated breed, with a dense inner coat that provides them with adequate warmth in the outdoors, and an outer coat that lies flat against their bodies and repels water. Golden Retrievers are well suited to residency in suburban or country environments. They are a relatively healthy breed, with life expectancy of 10–12 years.',
            ], [
                'name' => 'Miniature Pinscher',
                'description' => 'The Miniature Pinscher is a breed of dog of the Pinscher family. It is a small, solidly built, short-haired dog of square proportion, belonging to the toy group. The Miniature Pinscher is a descendant of the German Pinscher, and is one of the smallest dog breeds. The Miniature Pinscher is a companion dog, and is known for its loyalty, playfulness, and affectionate nature. It is a good watchdog, but is not aggressive. The Miniature Pinscher is a member of the Pinscher and Schnauzer (German Pinscher) group of the AKC.',
            ], [
                'name' => 'Blue Ticked Beagle',
                'description' => 'The Blue Tick Beagle is a breed of dog of the hound family. It is a small, solidly built, short-haired dog of square proportion, belonging to the toy group. The Blue Tick Beagle is a descendant of the German Pinscher, and is one of the smallest dog breeds. The Blue Tick Beagle is a companion dog, and is known for its loyalty, playfulness, and affectionate nature. It is a good watchdog, but is not aggressive. The Blue Tick Beagle is a member of the Pinscher and Schnauzer (German Pinscher) group of the AKC.',
            ],
        ]);

        foreach ($breeds as $breed) {
            \App\Models\Breed::factory()->create($breed);
        }
    }
}
