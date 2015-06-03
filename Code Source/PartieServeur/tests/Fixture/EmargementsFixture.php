<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmargementsFixture
 *
 */
class EmargementsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'v_id_emarg' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_id_carte' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'd_date_emarg' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'd_date_synchro' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'v_statut' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'I', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_EMA_ETU' => ['type' => 'index', 'columns' => ['v_id_carte'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['v_id_emarg'], 'length' => []],
            'FK_EMA_ETU' => ['type' => 'foreign', 'columns' => ['v_id_carte'], 'references' => ['etudiants', 'v_id_carte'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'v_id_emarg' => '547b8d72-fc58-496c-97ce-9139ceea5f9c',
            'v_id_carte' => 'Lorem ipsum dolor ',
            'd_date_emarg' => '2015-06-02 19:37:09',
            'd_date_synchro' => '2015-06-02 19:37:09',
            'v_statut' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
