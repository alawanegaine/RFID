<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Entity.
 */
class Classe extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'v_libelle' => true,
        'v_statut' => true,
    ];
}
