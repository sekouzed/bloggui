<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity.
 */
class Blog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'slug' => true,
        'logo' => true,
        'description' => true,
        'language' => true,
        'basic_color' => true,
        'state' => true,
        'user_id' => true,
        'domain_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
        'domain' => true,
        'posts' => true,
        'rubrics' => true,
    ];
}
