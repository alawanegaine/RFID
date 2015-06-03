<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Groupe Entity.
 */
class Groupe extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'v_id_classe' => true,
        'v_libelle' => true,
        'v_statut' => true,
    ];
}
