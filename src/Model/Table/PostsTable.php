<?php
namespace App\Model\Table;

use App\Model\Entity\Post;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 */
class PostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('posts');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');
        $this->belongsTo('Rubrics', [
            'foreignKey' => 'rubric_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Blogs', [
            'foreignKey' => 'blog_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('image');

        $validator
            ->allowEmpty('slug');

        $validator
            ->allowEmpty('intro');

        $validator
            ->allowEmpty('content');

        $validator
            ->add('like', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('like');

        $validator
            ->add('unlike', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('unlike');

        $validator
            ->add('state', 'inList', [
                'rule' => ['inList', ['draft','published','unpublished']],
                'message' => 'Merci de rentrer un etat valide'
            ]);

        return $validator;
    }
    public function beforeSave($event, $entity, $options)
    {
        if ($entity->stata=='published') {
            $entity->published_at = $entity->updated_at;
        }
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
        $rules->add($rules->existsIn(['rubric_id'], 'Rubrics'));
        $rules->add($rules->existsIn(['blog_id'], 'Blogs'));
        return $rules;
    }


}
