<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PerPersonFixture
 *
 */
class PerPersonFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'per_person';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_person' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'surname' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_doc_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'doc_num' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'birth_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'id_gender' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_nal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_marital_status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_condition' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'per_doc_type' => ['type' => 'index', 'columns' => ['id_doc_type'], 'length' => []],
            'per_gender' => ['type' => 'index', 'columns' => ['id_gender'], 'length' => []],
            'per_nal' => ['type' => 'index', 'columns' => ['id_nal'], 'length' => []],
            'per_marital_status' => ['type' => 'index', 'columns' => ['id_marital_status'], 'length' => []],
            'per_condition' => ['type' => 'index', 'columns' => ['id_condition'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_person'], 'length' => []],
            'per_condition' => ['type' => 'foreign', 'columns' => ['id_condition'], 'references' => ['per_condition', 'id_condition'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'per_doc_type' => ['type' => 'foreign', 'columns' => ['id_doc_type'], 'references' => ['per_doc_type', 'id_doc_type'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'per_gender' => ['type' => 'foreign', 'columns' => ['id_gender'], 'references' => ['per_gender', 'per_gender'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'per_marital_status' => ['type' => 'foreign', 'columns' => ['id_marital_status'], 'references' => ['per_marital_status', 'id_marital_status'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'per_nal' => ['type' => 'foreign', 'columns' => ['id_nal'], 'references' => ['geo_country', 'id_country'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'name' => 'Lorem ipsum dolor sit amet',
            'surname' => 'Lorem ipsum dolor sit amet',
            'id_doc_type' => 1,
            'doc_num' => 1,
            'birth_date' => '2017-05-12',
            'id_gender' => 1,
            'id_nal' => 1,
            'id_marital_status' => 1,
            'id_condition' => 1
        ],
    ];
}
