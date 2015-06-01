<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Domain Entity.
 */
class Domain extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'slug' => true,
        'description' => true,
        'created_at' => true,
        'updated_at' => true,
        'blogs' => true,
    ];
}
