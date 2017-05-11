<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerDocTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerDocTypeTable Test Case
 */
class PerDocTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerDocTypeTable
     */
    public $PerDocType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_doc_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerDocType') ? [] : ['className' => 'App\Model\Table\PerDocTypeTable'];
        $this->PerDocType = TableRegistry::get('PerDocType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerDocType);

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
