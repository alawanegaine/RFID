<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AbsencesFixture
 *
 */
class AbsencesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'v_id_abs' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_id_etu' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'd_abs' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'v_just' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'N', 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_statut' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'I', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_ABS_ETU' => ['type' => 'index', 'columns' => ['v_id_etu'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['v_id_abs'], 'length' => []],
            'FK_ABS_ETU' => ['type' => 'foreign', 'columns' => ['v_id_etu'], 'references' => ['etudiants', 'v_id_etu'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'v_id_abs' => '9b8fcf21-f31e-4f73-bcd2-06d65fabc372',
            'v_id_etu' => 'Lorem ipsum dolor ',
            'd_abs' => '2015-06-02 19:07:15',
            'v_just' => 'Lorem ipsum dolor sit ame',
            'v_statut' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
