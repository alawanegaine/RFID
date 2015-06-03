<?php
namespace App\Model\Table;

use App\Model\Entity\Creneaux;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Creneaux Model
 *
 */
class CreneauxTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('creneaux');
        $this->displayField('v_id_creneau');
        $this->primaryKey('v_id_creneau');
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
            ->allowEmpty('v_id_creneau', 'create');
            
        $validator
            ->requirePresence('v_id_groupe', 'create')
            ->notEmpty('v_id_groupe');
            
        $validator
            ->add('d_date_emarg', 'valid', ['rule' => 'datetime'])
            ->requirePresence('d_date_emarg', 'create')
            ->notEmpty('d_date_emarg');
            
        $validator
            ->add('d_date_synchro', 'valid', ['rule' => 'datetime'])
            ->requirePresence('d_date_synchro', 'create')
            ->notEmpty('d_date_synchro');
            
        $validator
            ->requirePresence('v_statut', 'create')
            ->notEmpty('v_statut');

        return $validator;
    }
}
