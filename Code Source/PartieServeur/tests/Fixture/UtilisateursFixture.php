<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UtilisateursFixture
 *
 */
class UtilisateursFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'v_id_user' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_prenom' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_nom' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_type' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'E', 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_login' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_mdp' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'v_statut' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'I', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['v_id_user'], 'length' => []],
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
            'v_id_user' => '963537e7-f9c7-483c-a2e8-5bb2135247a4',
            'v_prenom' => 'Lorem ipsum dolor sit amet',
            'v_nom' => 'Lorem ipsum dolor sit amet',
            'v_type' => 'Lorem ipsum dolor sit ame',
            'v_login' => 'Lorem ipsum dolor ',
            'v_mdp' => 'Lorem ipsum dolor ',
            'v_statut' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
