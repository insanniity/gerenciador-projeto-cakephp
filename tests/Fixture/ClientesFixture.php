<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientesFixture
 */
class ClientesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'created' => 1641181271,
                'modified' => 1641181271,
                'cep' => 'Lorem ipsum dolor sit amet',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'complemento' => 'Lorem ipsum dolor sit amet',
                'cpf_ou_cnpj' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'empresa' => 'Lorem ipsum dolor sit amet',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
                'insc_municipal' => 'Lorem ipsum dolor sit amet',
                'nome_completo' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem ipsum dolor sit amet',
                'razao_social' => 'Lorem ipsum dolor sit amet',
                'responsavel' => 'Lorem ipsum dolor sit amet',
                'socio' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'wpp' => 'Lorem ipsum dolor sit amet',
                'wpp_socio' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
