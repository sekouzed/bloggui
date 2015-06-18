<?php
namespace App\Controller\Author;

use App\Controller\AppController;


class PostsController extends AppController
{

    public function index()
    {
//
//        $this->paginate = [
//            'contain' => ['Habitations','Paiements']//,'limit'=>1
//        ];
//        $query = $this->Posts->find()->where(['Habitants.syndic_id' => $this->Auth->user('syndic_id')]);
//
//        $this->set('habitants', $this->paginate($query));
//
//        $this->paginate = [
//            'contain' => ['Rubrics']
//        ];
//        $this->set('posts', $this->paginate($this->Posts));

        $this->set('posts', $this->paginate($this->Posts->find('all', [
            'contain' => ['Rubrics'],
            'Posts.blog_id' => $this->Auth->user('blog_id')
        ])));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Rubrics']
        ]);
        $this->set('post', $post);
    }

    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->data);

            $post->blog_id = $this->Auth->user('blog_id');

            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post could not be saved. Please, try again.'));
            }
        }
        $rubrics = $this->Posts->Rubrics->find('treeList');
//        $rubrics = $this->Posts->Rubrics->find('list', ['limit' => 200]);
        $this->set(compact('post', 'rubrics'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'Posts.blog_id' => $this->Auth->user('blog_id')
        ]);

//        $habitant = $this->Habitants->find()->where(
//            ['id' => $id,'syndic_id' => $this->Auth->user('syndic_id')]
//        )->first();
//
//        if (!$habitant) {
//            throw new NotFoundException();
//        }

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
        $this->set('_serialize', ['post']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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
