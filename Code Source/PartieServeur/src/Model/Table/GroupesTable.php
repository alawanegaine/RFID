<?php
namespace App\Model\Table;

use App\Model\Entity\Groupe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Groupes Model
 *
 */
class GroupesTable extends Table
{
    public $virtualFields = [
        'full_groupe' => 'CONCAT(Groupe.v_id_groupe," ",Groupe.v_libelle)'
    ];

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('groupes');
        $this->displayField('v_id_groupe');
        $this->primaryKey('v_id_groupe');
        $this->belongsTo('classes', [
            'foreignKey' => 'v_id_classe',
            'propertyName' => 'classe'
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
            ->allowEmpty('v_id_groupe', 'create');
            
        $validator
            ->requirePresence('v_id_classe', 'create')
            ->notEmpty('v_id_classe');
            
        $validator
            ->requirePresence('v_libelle', 'create')
            ->notEmpty('v_libelle');
            
        $validator
            ->requirePresence('v_statut', 'create')
            ->notEmpty('v_statut');

        return $validator;
    }
}
