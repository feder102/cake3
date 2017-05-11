<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerMaritalStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerMaritalStatusTable Test Case
 */
class PerMaritalStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerMaritalStatusTable
     */
    public $PerMaritalStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_marital_status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerMaritalStatus') ? [] : ['className' => 'App\Model\Table\PerMaritalStatusTable'];
        $this->PerMaritalStatus = TableRegistry::get('PerMaritalStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerMaritalStatus);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
