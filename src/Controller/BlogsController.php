<?php
namespace App\Controller;

use App\Controller\AppController;


class BlogsController extends AppController
{
    public function isAuthorized($user)
    {
        if ($this->request->action === 'show') {
            return true;
        }
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        if (isset($user['role']) && $user['role'] === 'author') {

            if ($this->request->action === 'edit') {
                $blogId = (int)$this->request->params['pass'][0];
                if ($this->Blogs->isOwnedBlog($blogId, $user['id'])) {
                    return true;
                }
            }
        }
        return parent::isAuthorized($user);
    }

    public function isOwnedBlog($blogId, $userId)
    {
        return $this->exists(['id' => $blogId, 'user_id' => $userId]);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Domains']
        ];
        $this->set('blogs', $this->paginate($this->Blogs));
        $this->set('_serialize', ['blogs']);
    }

    public function view($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => ['Users', 'Domains', 'Posts', 'Rubrics']
        ]);
        $this->set('blog', $blog);
        $this->set('_serialize', ['blog']);
    }

    public function add()
    {
        $blog = $this->Blogs->newEntity();
        if ($this->request->is('post')) {
            $blog = $this->Blogs->patchEntity($blog, $this->request->data);
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blog could not be saved. Please, try again.'));
            }
        }
        $users = $this->Blogs->Users->find('list', ['limit' => 200]);
        $domains = $this->Blogs->Domains->find('list', ['limit' => 200]);
        $this->set(compact('blog', 'users', 'domains'));
        $this->set('_serialize', ['blog']);
    }

    public function edit($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blog = $this->Blogs->patchEntity($blog, $this->request->data);
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blog could not be saved. Please, try again.'));
            }
        }
        $users = $this->Blogs->Users->find('list', ['limit' => 200]);
        $domains = $this->Blogs->Domains->find('list', ['limit' => 200]);
        $this->set(compact('blog', 'users', 'domains'));
        $this->set('_serialize', ['blog']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success(__('The blog has been deleted.'));
        } else {
            $this->Flash->error(__('The blog could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
