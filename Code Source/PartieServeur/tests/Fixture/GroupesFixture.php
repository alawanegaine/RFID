<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GroupesFixture
 *
 */
class GroupesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'v_id_groupe' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_id_classe' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_libelle' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_statut' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'I', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_GRO_CLAS' => ['type' => 'index', 'columns' => ['v_id_classe'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['v_id_groupe'], 'length' => []],
            'FK_GRO_CLAS' => ['type' => 'foreign', 'columns' => ['v_id_classe'], 'references' => ['classes', 'v_id_classe'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'v_id_groupe' => '72b947da-a9b5-4fee-b417-2b72de046f11',
            'v_id_classe' => 'Lorem ipsum dolor ',
            'v_libelle' => 'Lorem ipsum dolor sit amet',
            'v_statut' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
