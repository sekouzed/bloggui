<?php
namespace App\Model\Table;

use App\Model\Entity\Domain;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Domains Model
 */
class DomainsTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('domains');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->hasMany('Blogs', [
            'foreignKey' => 'domain_id'
        ]);
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->notEmpty('title', "Un titre est nécessaire");
            
        $validator
            ->allowEmpty('slug');
            
        $validator
            ->allowEmpty('description');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['title']));
        return $rules;
    }
}
