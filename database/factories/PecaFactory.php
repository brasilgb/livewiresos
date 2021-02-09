<?php

namespace Database\Factories;

use App\Models\Peca;
use Illuminate\Database\Eloquent\Factories\Factory;

class PecaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Peca::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'peca' => 'Memórias',
            'descricao' => 'Pecas variadas',
            'fabricante' => 'Fabricnte genérico',
            'quantidade' => '45',
            'valor' => '250',
            'situacao' => 'Nova',
            'observacoes' => ''
        ];
    }
}
