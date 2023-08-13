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
        $title = fake()->unique()->text(75);
        $slug = str_replace(" ", "_",strval($title));
        return [
            'title'=>$title,
            'slug'=>$slug,
            'description'=>fake()->text(256),
            'meta_title'=>fake()->text(125),
            'meta_description'=>fake()->text(128),
            'meta_description_1'=>fake()->text(128),
            'meta_description_2'=>fake()->text(128),
            'meta_description_3'=>fake()->text(128),
            'meta_description_4'=>fake()->text(128),
            'status'=>'published'
        ];
    }
}
