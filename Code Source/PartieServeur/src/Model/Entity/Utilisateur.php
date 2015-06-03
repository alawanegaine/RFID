<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Utilisateur Entity.
 */
class Utilisateur extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'v_prenom' => true,
        'v_nom' => true,
        'v_type' => true,
        'v_login' => true,
        'v_mdp' => true,
        'v_statut' => true,
    ];
}
