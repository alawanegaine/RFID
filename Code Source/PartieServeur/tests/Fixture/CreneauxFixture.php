<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CreneauxFixture
 *
 */
class CreneauxFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'creneaux';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'v_id_creneau' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_id_groupe' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'd_date_emarg' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'd_date_synchro' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'v_statut' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'I', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_CREN_GROU' => ['type' => 'index', 'columns' => ['v_id_groupe'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['v_id_creneau'], 'length' => []],
            'FK_CREN_GROU' => ['type' => 'foreign', 'columns' => ['v_id_groupe'], 'references' => ['groupes', 'v_id_groupe'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'v_id_creneau' => 'bd1fb66d-9fdd-4cc0-93dc-e28243403aa8',
            'v_id_groupe' => 'Lorem ipsum dolor ',
            'd_date_emarg' => '2015-06-02 19:36:56',
            'd_date_synchro' => '2015-06-02 19:36:56',
            'v_statut' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
