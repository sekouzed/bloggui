<?php
namespace App\Controller\Admin;

use App\Controller\AppController;


class RubricsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentRubrics', 'Blogs']
        ];
        $this->set('rubrics', $this->paginate($this->Rubrics));
    }

    public function view($id = null)
    {
        $rubric = $this->Rubrics->get($id, [
            'contain' => ['ParentRubrics', 'Blogs', 'Posts', 'ChildRubrics']
        ]);
        $this->set('rubric', $rubric);
    }

    public function add()
    {
        $rubric = $this->Rubrics->newEntity();
        if ($this->request->is('post')) {
            $rubric = $this->Rubrics->patchEntity($rubric, $this->request->data);
            if ($this->Rubrics->save($rubric)) {
                $this->Flash->success(__('The rubric has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rubric could not be saved. Please, try again.'));
            }
        }
        $parentRubrics = $this->Rubrics->ParentRubrics->find('list', ['limit' => 200]);
        $blogs = $this->Rubrics->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('rubric', 'parentRubrics', 'blogs'));
    }

    public function edit($id = null)
    {
        $rubric = $this->Rubrics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rubric = $this->Rubrics->patchEntity($rubric, $this->request->data);
            if ($this->Rubrics->save($rubric)) {
                $this->Flash->success(__('The rubric has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rubric could not be saved. Please, try again.'));
            }
        }
        $parentRubrics = $this->Rubrics->ParentRubrics->find('list', ['limit' => 200]);
        $blogs = $this->Rubrics->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('rubric', 'parentRubrics', 'blogs'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rubric = $this->Rubrics->get($id);
        if ($this->Rubrics->delete($rubric)) {
            $this->Flash->success(__('The rubric has been deleted.'));
        } else {
            $this->Flash->error(__('The rubric could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
