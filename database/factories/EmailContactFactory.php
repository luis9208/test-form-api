<?php

namespace Database\Factories;

use App\Models\EmailContact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmailContact>
 */
class EmailContactFactory extends Factory
{
    protected $model = EmailContact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
