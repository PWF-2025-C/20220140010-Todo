<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Todo::class;

    public function definition(): array
    {
        return [
            'user_id' => rand(1, 100),
            'title' => ucwords(fake()->sentence()),
            'is_done' => rand(0,1),
            'title' => $this->faker->sentence,
            'is_done' => $this->faker->boolean,
            'user_id' => User::factory(), // Relasi ke User
            'category_id' => Category::factory(), // Relasi ke Category
        ];
    }
}