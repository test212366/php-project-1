<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      //   \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

			$user = User::factory()->create([
				'name' => 'John Doe',
				'email' => 'john@gmail.com'
			]);


			Listing::factory(6) -> create([
				'user_id' => $user->id
			]);


			// Listing::create([
			// 	// 'title' => 'lavarel Senior',
			// 	'tags' => 'laravel',
			// 	'company' => 'acme',
			// 	'location' => 'boston',
			// 	'email' => 'email@',
			// 	'website' => 'https://loc',
			// 	'description' => 'mewosfldkjf sld fjsa;j dsljf sdlfj ksd'
			// ]);
			// Listing::create([
			// 	// 'title' => 'lavarel Senior 2',
			// 	'tags' => 'laravel 2',
			// 	'company' => 'acme 2',
			// 	'location' => 'boston 2',
			// 	'email' => 'email@2',
			// 	'website' => 'https://loc2',
			// 	'description' => 'mewosfldkjf sld fjsa;j dsljf sdlfj ksd 12321 321321321'
			// ]);


    }
}
