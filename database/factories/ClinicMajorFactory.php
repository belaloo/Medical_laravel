<?php

namespace Database\Factories;

use App\Models\ClinicMajor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ClinicMajorFactory extends Factory
{
    protected $model = ClinicMajor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => rand(1,10),
            'clinic_id' => rand(1,10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
