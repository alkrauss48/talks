<?php

namespace Database\Factories;

use App\Models\OldStore;
use Illuminate\Database\Eloquent\Factories\Factory;

class OldStoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OldStore::class;

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
            'street_address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->stateAbbr,
            'zip' => $this->faker->postcode,
        ];
    }
}
