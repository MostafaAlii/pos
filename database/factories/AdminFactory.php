<?php
namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
class AdminFactory extends Factory {
    public function definition() {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'password' => bcrypt('password'),
            'super_admin' => $this->faker->boolean,
            'remember_token' => Str::random(10),
        ];
    }
}
