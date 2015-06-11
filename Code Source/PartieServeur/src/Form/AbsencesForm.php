<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class AbsencesForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('Nom', ['type' => 'string'])
            ->addField('Prénom', ['type' => 'string']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('Nom', 'length', [
                'rule' => ['maxLength', 20]
            ])->add('Prénom', 'length', [
                'rule' => ['maxLength', 20]
            ]);
    }

    protected function _execute(array $data)
    {
        debug($data);
        return true;
    }
}