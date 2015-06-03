<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EtudiantsFixture
 *
 */
class EtudiantsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'v_id_etu' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_id_carte' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_prenom' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_nom' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_id_groupe' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_statut' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'I', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'IX_CARTE' => ['type' => 'index', 'columns' => ['v_id_carte'], 'length' => []],
            'FK_ETU_GROU' => ['type' => 'index', 'columns' => ['v_id_groupe'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['v_id_etu'], 'length' => []],
            'FK_ETU_GROU' => ['type' => 'foreign', 'columns' => ['v_id_groupe'], 'references' => ['groupes', 'v_id_groupe'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'v_id_etu' => '6c5a5b7e-e46c-4445-ae03-4d25a01dd660',
            'v_id_carte' => 'Lorem ipsum dolor ',
            'v_prenom' => 'Lorem ipsum dolor sit amet',
            'v_nom' => 'Lorem ipsum dolor sit amet',
            'v_id_groupe' => 'Lorem ipsum dolor ',
            'v_statut' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
