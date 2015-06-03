<?php
namespace App\Controller\Admin;

use App\Controller\AppController;


class PostsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Rubrics', 'Blogs']
        ];
        $this->set('posts', $this->paginate($this->Posts));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Rubrics', 'Blogs']
        ]);
        $this->set('post', $post);
    }

    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post could not be saved. Please, try again.'));
            }
        }
        $rubrics = $this->Posts->Rubrics->find('list', ['limit' => 200]);
        $blogs = $this->Posts->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('post', 'rubrics', 'blogs'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
