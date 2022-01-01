<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Painel;

use App\Controller\Painel\UsersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Painel\UsersController Test Case
 *
 * @uses \App\Controller\Painel\UsersController
 */
class UsersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Users',
    ];

    /**
     * Test login method
     *
     * @return void
     * @uses \App\Controller\Painel\UsersController::login()
     */
    public function testLogin(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
