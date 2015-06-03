<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emargement Entity.
 */
class Emargement extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'v_id_carte' => true,
        'd_date_emarg' => true,
        'd_date_synchro' => true,
        'v_statut' => true,
    ];
}
