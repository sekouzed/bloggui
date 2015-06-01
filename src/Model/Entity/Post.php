<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity.
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'image' => true,
        'slug' => true,
        'intro' => true,
        'content' => true,
        'like' => true,
        'unlike' => true,
        'state' => true,
        'rubric_id' => true,
        'blog_id' => true,
        'published at' => true,
        'created_at' => true,
        'updated_at' => true,
        'rubric' => true,
        'blog' => true,
    ];
}
