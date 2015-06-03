<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
//            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Blogs',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authError' => __('Merci de vous connecter'),
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'email']
                ]
            ]
        ]);
    }

//    public function isAuthorized($user)
//    {
//        if (isset($this->request->prefix)) {
//            if (isset($user['role'])) {
//                if ($this->request->prefix === 'admin' && $user['role'] === 'admin') {
//                    return true;
//                }
//                if ($this->request->prefix === 'author' && $user['role'] === 'author') {
//                    return true;
//                }
//            }
//            return false;
//        }
//    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['display']);
    }

    public function beforeRender(Event $event)
    {
        if ($this->request->prefix === 'admin') {
            $this->layout = 'admin';
        }
        if ($this->request->prefix === 'author') {
            $this->layout = 'author';
        }
        if($this->request->is('ajax')){
            $this->layout = 'ajax';
        }

    }


}
