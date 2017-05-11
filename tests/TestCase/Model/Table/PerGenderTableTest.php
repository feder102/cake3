<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerGenderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerGenderTable Test Case
 */
class PerGenderTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerGenderTable
     */
    public $PerGender;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_gender'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerGender') ? [] : ['className' => 'App\Model\Table\PerGenderTable'];
        $this->PerGender = TableRegistry::get('PerGender', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerGender);

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
