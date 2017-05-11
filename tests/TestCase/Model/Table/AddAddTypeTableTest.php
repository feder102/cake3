<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddAddTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddAddTypeTable Test Case
 */
class AddAddTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AddAddTypeTable
     */
    public $AddAddType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.add_add_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AddAddType') ? [] : ['className' => 'App\Model\Table\AddAddTypeTable'];
        $this->AddAddType = TableRegistry::get('AddAddType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AddAddType);

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
