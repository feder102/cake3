<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerConditionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerConditionTable Test Case
 */
class PerConditionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerConditionTable
     */
    public $PerCondition;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_condition'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerCondition') ? [] : ['className' => 'App\Model\Table\PerConditionTable'];
        $this->PerCondition = TableRegistry::get('PerCondition', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerCondition);

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
