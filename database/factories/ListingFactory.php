<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'title'
				'tags' => 'laravel, api, backend',
				'company' => $this -> faker -> company(),
				'email' => $this -> faker -> companyEmail(),
				'website' => $this -> faker -> url(),
				'location' => $this -> faker -> city(),
				'description' => $this -> faker -> paragraph(2),

				// 'tags' => 'laravel',
					// 'company' => 'acme',
					// 'location' => 'boston',
					// 'email' => 'email@',
					// 'website' => 'https://loc',
					// 'description' => 'mewosfldkjf sld fjsa;j dsljf sdlfj ksd'

        ];
    }
}
