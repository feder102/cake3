<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TelPhoneFixture
 *
 */
class TelPhoneFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tel_phone';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_phone' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_person' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'value' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_phone_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_phone_company' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'tel_per' => ['type' => 'index', 'columns' => ['id_person'], 'length' => []],
            'tel_company' => ['type' => 'index', 'columns' => ['id_phone_company'], 'length' => []],
            'tel_type' => ['type' => 'index', 'columns' => ['id_phone_type'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_phone'], 'length' => []],
            'tel_company' => ['type' => 'foreign', 'columns' => ['id_phone_company'], 'references' => ['tel_phone_company', 'id_phone_company'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tel_per' => ['type' => 'foreign', 'columns' => ['id_person'], 'references' => ['per_person', 'id_person'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tel_type' => ['type' => 'foreign', 'columns' => ['id_phone_type'], 'references' => ['tel_phone_type', 'id_phone_type'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_phone' => 1,
            'id_person' => 1,
            'value' => 'Lorem ipsum d',
            'id_phone_type' => 1,
            'id_phone_company' => 1
        ],
    ];
}
