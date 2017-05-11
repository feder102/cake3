<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsoPerAddFixture
 *
 */
class AsoPerAddFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aso_per_add';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_person' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_add' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_add_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        '_indexes' => [
            'aso_add_type' => ['type' => 'index', 'columns' => ['id_add_type'], 'length' => []],
            'aso_add' => ['type' => 'index', 'columns' => ['id_add'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_person', 'id_add'], 'length' => []],
            'aso_add' => ['type' => 'foreign', 'columns' => ['id_add'], 'references' => ['add_add', 'id_add'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'aso_add_type' => ['type' => 'foreign', 'columns' => ['id_add_type'], 'references' => ['add_add_type', 'id_add_type'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'aso_per' => ['type' => 'foreign', 'columns' => ['id_person'], 'references' => ['per_person', 'id_person'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_person' => 1,
            'id_add' => 1,
            'id_add_type' => 1
        ],
    ];
}
