<?php

namespace Database\Factories;
use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence;
        $description = fake()->text;
        $created_at = fake()->dateTimeBetween('-1 year');
        return [
        'title' => $title,
        'description' => $description,
        'created_at' => $created_at,
        'updated_at' => $created_at,
        ];
    }
}
