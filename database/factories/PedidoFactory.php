<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status_key = array_rand(Pedido::status);

        return [
            'instituicao' => $this->faker->sentence($nbWords = 10, $variableNbWords = true),
            'user_id'     => User::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
