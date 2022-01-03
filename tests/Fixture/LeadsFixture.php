<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LeadsFixture
 */
class LeadsFixture extends TestFixture
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
                'created' => 1641175675,
                'modified' => 1641175675,
                'cidade' => 'Lorem ipsum dolor sit amet',
                'data_nascimento' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
                'fonte' => 'Lorem ipsum dolor sit amet',
                'instagram' => 'Lorem ipsum dolor sit amet',
                'nome' => 'Lorem ipsum dolor sit amet',
                'redes_sociais' => 'Lorem ipsum dolor sit amet',
                'whatsapp' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
