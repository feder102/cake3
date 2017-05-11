<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoCountryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoCountryTable Test Case
 */
class GeoCountryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoCountryTable
     */
    public $GeoCountry;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.geo_country'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GeoCountry') ? [] : ['className' => 'App\Model\Table\GeoCountryTable'];
        $this->GeoCountry = TableRegistry::get('GeoCountry', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoCountry);

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
