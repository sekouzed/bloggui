<?php
namespace App\Controller\Admin;

use App\Controller\AppController;


class BlogsController extends AppController
{
    public function dashboard()
    {

    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Domains']
        ];
        $this->set('blogs', $this->paginate($this->Blogs));
    }

    public function view($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => ['Users', 'Domains', 'Posts', 'Rubrics']
        ]);
        $this->set('blog', $blog);
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
        $domains = $this->Blogs->Domains->find('list', ['limit' => 200]);
        $this->set(compact('blog', 'users', 'domains'));
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
