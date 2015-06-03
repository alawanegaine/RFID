<?php
namespace App\Model\Table;

use App\Model\Entity\Utilisateur;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Utilisateurs Model
 *
 */
class UtilisateursTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('utilisateurs');
        $this->displayField('v_id_user');
        $this->primaryKey('v_id_user');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('v_id_user', 'create');
            
        $validator
            ->requirePresence('v_prenom', 'create')
            ->notEmpty('v_prenom');
            
        $validator
            ->requirePresence('v_nom', 'create')
            ->notEmpty('v_nom');
            
        $validator
            ->requirePresence('v_type', 'create')
            ->notEmpty('v_type');
            
        $validator
            ->requirePresence('v_login', 'create')
            ->notEmpty('v_login');
            
        $validator
            ->requirePresence('v_mdp', 'create')
            ->notEmpty('v_mdp');
            
        $validator
            ->requirePresence('v_statut', 'create')
            ->notEmpty('v_statut');

        return $validator;
    }
}
