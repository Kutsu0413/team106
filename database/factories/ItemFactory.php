<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_class' => $this->faker->name(),
            'item_name' => $this->faker->name(),
            'item_detail' => $this->faker->realText(30)
        ];
    }
}
