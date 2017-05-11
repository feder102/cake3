<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddAddTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddAddTable Test Case
 */
class AddAddTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AddAddTable
     */
    public $AddAdd;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.add_add'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AddAdd') ? [] : ['className' => 'App\Model\Table\AddAddTable'];
        $this->AddAdd = TableRegistry::get('AddAdd', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AddAdd);

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
