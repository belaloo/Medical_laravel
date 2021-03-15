<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DoctorFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt(123456),
            'role_id' => 2,
            'mobile' => $this->faker->phoneNumber,
            'image' => $this->faker->image(null,640,480),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'major_id' => rand(1,20),
        ];
    }
}
