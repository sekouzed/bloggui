<?php
namespace App\Model\Table;

use App\Model\Entity\Blog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Inflector;

/**
 * Blogs Model
 */
class BlogsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('blogs');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Domains', [
            'foreignKey' => 'domain_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Posts', [
            'foreignKey' => 'blog_id'
        ]);
        $this->hasMany('Rubrics', [
            'foreignKey' => 'blog_id'
        ]);
        $this->addBehavior('Timestamp');
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
            ->add('title', [
                'length' => [
                    'rule' => ['minLength', 2],
                    'message' => '2 caractères au minimum',
                ]
            ])
            ->notEmpty('title');

        $validator
            ->add('slug', [
                'minLength' => [
                    'rule' => ['minLength', 2],
                    'message' => '2 caractères au minimum'
                ],
                'maxLength' => [
                    'rule' => ['maxLength', 32],
                    'message' => '32 caractères au minimum'
                ]
            ])
            ->notEmpty('slug');
            
        $validator
            ->allowEmpty('logo');
            
        $validator
            ->allowEmpty('description');
            
        $validator
            ->add('language', 'inList', [
                'rule' => ['inList', ['fr','en']],
                'message' => 'Merci de rentrer une langue valide'
            ])
            ->allowEmpty('language');
            
        $validator
            ->allowEmpty('basic_color');
            
        $validator
            ->add('state', 'inList', [
                'rule' => ['inList', ['disable','enable']],
                'message' => 'Merci de rentrer un etat valide'
            ]);

        return $validator;
    }

    public function beforeSave($event, $entity, $options)
    {
        $entity->set('slug', Inflector::slug($entity->get('slug'), '-'));
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
        $rules->add($rules->isUnique(['slug']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['domain_id'], 'Domains'));
        return $rules;
    }
}
