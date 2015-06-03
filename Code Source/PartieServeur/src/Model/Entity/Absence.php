<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Absence Entity.
 */
class Absence extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'v_id_etu' => true,
        'd_abs' => true,
        'v_just' => true,
        'v_statut' => true,
    ];
}
