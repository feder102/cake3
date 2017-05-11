<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsoPerAddTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsoPerAddTable Test Case
 */
class AsoPerAddTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AsoPerAddTable
     */
    public $AsoPerAdd;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aso_per_add'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AsoPerAdd') ? [] : ['className' => 'App\Model\Table\AsoPerAddTable'];
        $this->AsoPerAdd = TableRegistry::get('AsoPerAdd', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AsoPerAdd);

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
