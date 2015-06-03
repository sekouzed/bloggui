<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'photo' => true,
        'name' => true,
        'biography' => true,
        'gender' => true,
        'birthday' => true,
        'country' => true,
        'city' => true,
        'state' => true,
        'role' => true,
        'blog_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'blog' => true,
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }

}
