<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelPhoneCompanyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelPhoneCompanyTable Test Case
 */
class TelPhoneCompanyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelPhoneCompanyTable
     */
    public $TelPhoneCompany;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tel_phone_company'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TelPhoneCompany') ? [] : ['className' => 'App\Model\Table\TelPhoneCompanyTable'];
        $this->TelPhoneCompany = TableRegistry::get('TelPhoneCompany', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelPhoneCompany);

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
