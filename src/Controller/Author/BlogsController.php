<?php
namespace App\Controller\Author;

use App\Controller\AppController;


class BlogsController extends AppController
{

    public function dashboard()
    {

    }

    public function config()
    {
        $blog = $this->Blogs->get($this->Auth->user('blog_id'), [
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
