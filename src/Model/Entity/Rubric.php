<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rubric Entity.
 */
class Rubric extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'slug' => true,
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'blog_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'parent_rubric' => true,
        'blog' => true,
        'posts' => true,
        'child_rubrics' => true,
    ];
}
