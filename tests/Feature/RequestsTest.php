
<?php

use Database\Seeders\BreedSeeder;
use Database\Seeders\PetSeeder;

beforeEach(function () {
    $this->artisan('migrate:fresh');
    $this->seed(BreedSeeder::class);
    $this->seed(PetSeeder::class);
});

it('can view the pets index page', function () {
    $this->get('/')
        ->assertStatus(200)
        ->assertSee('View Our Pet Directory');
});

it('can view a pets detail page', function () {
    $this->get('/pets/1')
        ->assertStatus(200)
        ->assertSee('View Details on');
});
