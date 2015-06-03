<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Etudiant Entity.
 */
class Etudiant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'v_id_carte' => true,
        'v_prenom' => true,
        'v_nom' => true,
        'v_id_groupe' => true,
        'v_statut' => true,
    ];
}
