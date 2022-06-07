<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Festival;
use App\Models\Gig;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Artist::factory(5)->create();
        Festival::factory(5)->create();
        Gig::factory(5)->create();
        User::factory(5)->create();

        Artist::factory(3)->has(Gig::factory()->count(3))->create();;
        Gig::factory()->has(User::factory()->count(3))->create();
        Artist::factory(3)->has(Festival::factory()->count(3))->create();
        Festival::factory(3)->has(User::factory()->count(5))->create();
        
    }
}
