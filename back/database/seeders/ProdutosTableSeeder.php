<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Exemplo de criação de produtos
        $produtos = [
            [
                'nome' => 'Produto 1',
                'preco' => 10.99,
                'quantidade' => 5,
            ],
            [
                'nome' => 'Produto 2',
                'preco' => 19.99,
                'quantidade' => 3,
            ],
            // Adicione mais produtos se necessário
        ];

        // Popula a tabela de produtos
        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
