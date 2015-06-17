<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Creneaux Entity.
 */
class Creneaux extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'v_id_groupe' => true,
        'd_date_debut' => true,
        'd_date_fin' => true,
        'v_statut' => true,
    ];
}
