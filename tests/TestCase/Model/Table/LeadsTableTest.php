<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LeadsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LeadsTable Test Case
 */
class LeadsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LeadsTable
     */
    protected $Leads;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Leads',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Leads') ? [] : ['className' => LeadsTable::class];
        $this->Leads = $this->getTableLocator()->get('Leads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Leads);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LeadsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
