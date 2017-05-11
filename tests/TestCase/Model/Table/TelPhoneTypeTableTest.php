<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelPhoneTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelPhoneTypeTable Test Case
 */
class TelPhoneTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelPhoneTypeTable
     */
    public $TelPhoneType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tel_phone_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TelPhoneType') ? [] : ['className' => 'App\Model\Table\TelPhoneTypeTable'];
        $this->TelPhoneType = TableRegistry::get('TelPhoneType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelPhoneType);

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
