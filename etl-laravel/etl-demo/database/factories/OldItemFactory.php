<?php

namespace Database\Factories;

use App\Models\OldItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OldItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OldItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name1' => $this->faker->company,
            'name2' => $this->faker->companySuffix,
            'quantity' => $this->faker->numberBetween($min = 0, $max = 20),
            'old_store_id' => $this->faker->numberBetween($min = 1, $max = 1000),
        ];
    }
}
