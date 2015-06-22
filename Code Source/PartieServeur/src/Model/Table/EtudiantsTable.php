<?php
namespace App\Model\Table;

use App\Model\Entity\Etudiant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etudiants Model
 *
 */
class EtudiantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('etudiants');
        $this->displayField('v_id_etu');
        $this->primaryKey('v_id_etu');
        $this->belongsTo('groupes', [
            'foreignKey' => 'v_id_groupe',
            'propertyName' => 'groupe'
        ]);
        $this->hasMany(
            'absences', [
            'foreignKey' => 'v_id_etu',
            'propertyName' => 'absence',
            'dependent' => true,
            ]);
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
            //->allowEmpty('v_id_etu', 'create');
            ->requirePresence('v_id_etu', 'create')
            ->notEmpty('v_id_etu');
        $validator
            ->requirePresence('v_id_carte', 'create')
            ->notEmpty('v_id_carte');
            
        $validator
            ->requirePresence('v_prenom', 'create')
            ->notEmpty('v_prenom');
            
        $validator
            ->requirePresence('v_nom', 'create')
            ->notEmpty('v_nom');
            
        $validator
            ->requirePresence('v_id_groupe', 'create')
            ->notEmpty('v_id_groupe');
            
        $validator
            ->requirePresence('v_statut', 'create')
            ->notEmpty('v_statut');

        return $validator;
    }
}
