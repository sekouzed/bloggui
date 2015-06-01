<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasOne('Blogs', [
            'foreignKey' => 'user_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->add('email', 'valid', [
                'rule' => 'email',
                'message' => 'Email incorrect'
            ])
            ->notEmpty('email', "Un email est nécessaire");
            
        $validator
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 4],
                    'message' => '4 caractères au minimum'
                ]
            ])
            ->notEmpty('password', "Un nom d'utilisateur est nécessaire");

        $validator
            ->allowEmpty('photo');
            
        $validator
            ->notEmpty('name', "Un email est nécessaire");

        $validator
            ->allowEmpty('biography');
            
        $validator
            ->add('gender', 'inList', [
                'rule' => ['inList', ['male','female']],
                'message' => 'Merci de rentrer un genre valide'
            ]);
            
        $validator
            ->add('birthday', 'valid', ['rule' => 'date'])
            ->allowEmpty('birthday');
            
        $validator
            ->allowEmpty('country');
            
        $validator
            ->allowEmpty('city');
            
        $validator
            ->add('state', 'inList', [
                'rule' => ['inList', ['disable','enable']],
                'message' => 'Merci de rentrer un etat valide'
            ]);

        $validator
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin','author']],
                'message' => 'Merci de rentrer un role valide'
            ]);


        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
