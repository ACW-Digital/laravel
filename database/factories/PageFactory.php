<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->unique()->text(75),
            'description'=>fake()->text(256),
            'meta_title'=>fake()->text(125),
            'meta_description'=>fake()->text(128)
        ];
    }
}
