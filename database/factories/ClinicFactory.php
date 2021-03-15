<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ClinicFactory extends Factory
{
    protected $model = \App\Models\Clinic::class;

    /**
     * Define the model's default st ate.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'mobile' => $this->faker->phoneNumber,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
