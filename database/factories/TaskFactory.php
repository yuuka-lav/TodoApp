<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->realText(rand(10,20)), // 10~20のランダムなtext
            'is_done' => $this->faker->boolean(10), // 10%の確率でtrue
            'created_at' => now(), //　現在の時間
            'updated_at' => now(),
        ];
    }
}
