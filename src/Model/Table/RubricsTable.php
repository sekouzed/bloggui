<?php
namespace App\Model\Table;

use App\Model\Entity\Rubric;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class RubricsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('rubrics');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Tree');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');
        $this->belongsTo('ParentRubrics', [
            'className' => 'Rubrics',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Blogs', [
            'foreignKey' => 'blog_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Posts', [
            'foreignKey' => 'rubric_id'
        ]);
        $this->hasMany('ChildRubrics', [
            'className' => 'Rubrics',
            'foreignKey' => 'parent_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->notEmpty('title');
            
        $validator
            ->allowEmpty('slug');
            
        $validator
            ->add('lft', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('lft');
            
        $validator
            ->add('rght', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rght');


        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['title']));
        $rules->add($rules->existsIn(['parent_id'], 'ParentRubrics'));
        $rules->add($rules->existsIn(['blog_id'], 'Blogs'));
        return $rules;
    }
}
