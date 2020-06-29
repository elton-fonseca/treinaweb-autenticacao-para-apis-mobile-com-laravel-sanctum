<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function listar()
    {
        return [
            '0' => [
                'numero' => '00001',
                'valor'  => 35.52,
                'data'   => new \DateTime(),
                'usuario' => 1
            ],
            '1' => [
                'numero' => '00002',
                'valor'  => 45.52,
                'data'   => new \DateTime(),
                'usuario' => 2
            ]
        ];
    }
}
