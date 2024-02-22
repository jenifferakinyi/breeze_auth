<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'first_name'=>$this->faker->name,
            'last_name'=>$this->faker->name,
            'email'=>$this->faker->unique()->safeEmail,
            'phone' =>  '+254'. $this->faker->phoneNumber,
            'job_title'=>$this->faker->sentence(3),
            'organization_id' => function () {
                return Organization::factory()->create()->id;
            },
        ];
    }
}
