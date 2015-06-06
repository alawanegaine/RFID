<?php
namespace App\Model\Table;

use App\Model\Entity\Absence;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Absences Model
 *
 */
class AbsencesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('absences');
        $this->displayField('v_id_abs');
        $this->primaryKey('v_id_abs');
        $this->belongsTo('etudiants', [
            'foreignKey' => 'v_id_etu',
            'propertyName' => 'etudiant'
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
            ->allowEmpty('v_id_abs', 'create');
            
        $validator
            ->requirePresence('v_id_etu', 'create')
            ->notEmpty('v_id_etu');
            
        $validator
            ->add('d_abs', 'valid', ['rule' => 'datetime'])
            ->requirePresence('d_abs', 'create')
            ->notEmpty('d_abs');
            
        $validator
            ->requirePresence('v_just', 'create')
            ->notEmpty('v_just');
            
        $validator
            ->requirePresence('v_statut', 'create')
            ->notEmpty('v_statut');

        return $validator;
    }
}
