<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class InvoiceFactory extends Factory
{

    public function definition(): array
    {
        $paid = $this->faker->boolean();
        return [
            'user_id'=>User::all()->random()->id,
            'type'=>$this->faker->randomElement(['B', 'C', 'P']),
            'paid'=>$paid,
            'value'=> $this->faker->numberBetween(1000,10000),
            'payment-date'=>$paid ? $this->faker->randomElement([$this->faker->dateTimeThisMonth()]):null
            

        ];
    }
}
