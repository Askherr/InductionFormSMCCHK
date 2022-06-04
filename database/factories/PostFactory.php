<?php

namespace Database\Factories;
use App\Models\PostUser;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = PostUser::class;
     
    public function definition()
    {
        return [
            'CompanyName'=> $this->faker->company(),
            'CompanyPosition'=> $this->faker->jobTitle(),
            'nameUser'=> $this->faker->name(),
            'birthPlace'=> $this->faker->city(),
            'birthDate'=> $this->faker->date(),
            'BloodType'=> $this->faker->bloodType(),
            'Address'=> $this->faker->address(),
            'phoneNumber'=> $this->faker->phoneNumber(),
            'email'=> $this->faker->email(),
            'identity'=> $this->faker->image(),
            'photo'=> $this->faker->image(),
            'antigen'=> $this->faker->image(),
            'vaccine'=> $this->faker->image(),
            'health'=> $this->faker->image(),
        ];
    }
}
