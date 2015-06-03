<?php
namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->success(__('Vous etez connectez.'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect, essayez à nouveau."));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }


    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Blogs']
        ]);
        $this->set('user', $user);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        $user->blog = $this->Users->Blogs->newEntity();

        if ($this->request->is('post')) {

            $user = $this->Users->patchEntity($user, $this->request->data, ['associated' => ['Blogs'] ]);

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $domains = $this->Users->Blogs->Domains->find('list');
        $this->set(compact('user', 'domains'));
    }


}
