<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inbox>
 */
class InboxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Sender '.$this->faker->numerify("#####"),
            'subject' => 'Subject '.$this->faker->numerify("#####"),
            'email' => $this->faker->safeEmail(),
            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, cupiditate?',
        ];
    }
}
