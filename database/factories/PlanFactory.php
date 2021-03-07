<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Plan Flexible',
            'slug' => 'plan-flexible',
            'description' => 'plan de estudio que corresponde a 3 dias a la semana',
            'status' => 1,
            'days' => 3,
        ];
    }
}
