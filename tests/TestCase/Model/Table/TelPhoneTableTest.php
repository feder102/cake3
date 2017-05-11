<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelPhoneTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelPhoneTable Test Case
 */
class TelPhoneTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelPhoneTable
     */
    public $TelPhone;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tel_phone'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TelPhone') ? [] : ['className' => 'App\Model\Table\TelPhoneTable'];
        $this->TelPhone = TableRegistry::get('TelPhone', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelPhone);

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
